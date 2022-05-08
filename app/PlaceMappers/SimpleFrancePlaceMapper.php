<?php

/**
 * webtrees-lib: MyArtJaub library for webtrees
 *
 * @package MyArtJaub\Webtrees
 * @subpackage GeoDispersion
 * @author Jonathan Jaubart <dev@jaubart.com>
 * @copyright Copyright (c) 2021-2022, Jonathan Jaubart
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */

declare(strict_types=1);

namespace MyArtJaub\Webtrees\Module\GeoData\France\PlaceMappers;

use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Place;
use Fisharebest\Webtrees\Registry;
use Fisharebest\Webtrees\Services\ModuleService;
use MyArtJaub\Webtrees\Common\GeoDispersion\Config\NullPlaceMapperConfig;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\MapDefinitionInterface;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperConfigInterface;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface;
use MyArtJaub\Webtrees\Module\GeoData\France\GeoDataFranceModule;

/**
 * Enhanced Simple Place Mapper, specific for France places usage.
 * It allows for known mappings to override the standard lowest level name, depending on the loaded map.
 */
class SimpleFrancePlaceMapper implements PlaceMapperInterface
{
    /**
     * Mappings to link regions pre-2016 to the new regions
     *
     * @var array<string, string>
     */
    private const MAPPINGS_REGIONS = [
        'Auvergne'              =>  'Auvergne-Rhône-Alpes',
        'Rhône-Alpes'           =>  'Auvergne-Rhône-Alpes',
        'Bourgogne'             =>  'Bourgogne-Franche-Comté',
        'Franche-Comté'         =>  'Bourgogne-Franche-Comté',
        'Alsace'                =>  'Grand Est',
        'Centre'                =>  'Centre-Val de Loire',
        'Champagne-Ardenne'     =>  'Grand Est',
        'Lorraine'              =>  'Grand Est',
        'Nord-Pas-de-Calais'    =>  'Hauts-de-France',
        'Picardie'              =>  'Hauts-de-France',
        'Ile-de-France'         =>  'Île-de-France',
        'Languedoc-Roussillon'  =>  'Occitanie',
        'Midi-Pyrénées'         =>  'Occitanie',
        'Basse-Normandie'       =>  'Normandie',
        'Haute-Normandie'       =>  'Normandie',
        'Aquitaine'             =>  'Nouvelle-Aquitaine',
        'Limousin'              =>  'Nouvelle-Aquitaine',
        'Poitou-Charentes'      =>  'Nouvelle-Aquitaine',
    ];

    /**
     * Mappings to link previous names of departements to new ones
     *
     * @var array<string, string>
     */
    private const MAPPINGS_DEPARTEMENTS = [
        'Basses-Alpes'          =>  'Alpes-de-Haute-Provence',
        'Basses-Pyrénées'       =>  'Pyrénées-Atlantiques',
        'Charente-Inférieure'   =>  'Charente-Maritime',
        'Côtes-du-Nord'         =>  'Côtes-d\'Armor',
        'Loire-Inférieure'      =>  'Loire-Atlantique',
        'Seine-Inférieure'      =>  'Seine-Maritime',
    ];

    /**
     * Miscellaneous known mappings for communes
     *
     * @var array<string, string>
     */
    private const MAPPINGS_KNOWN_COMMUNES_VARIATIONS = [
        'Sarrus (Fridefont)'                            =>  'Fridefont',
        'Magnac (Fridefont)'                            =>  'Fridefont',
        'Mallet (Fridefont)'                            =>  'Fridefont',
        'Le Bacon (Les Monts-Verts)'                    =>  'Les Monts-Verts',
        'Arcomie (Les Monts-Verts)'                     =>  'Les Monts-Verts',
        'Anterrieux (Saint-Juéry)'                      =>  'Saint-Juéry',
        'Saint-Chély-Forain (Saint-Chély-d\'Apcher)'    =>  'Saint-Chély-d\'Apcher',
    ];

    /**
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::title()
     */
    public function title(): string
    {
        return I18N::translate('Mapping on place name, with known variations in France');
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::data()
     */
    public function data(string $key)
    {
        return $this->data[$key] ?? null;
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::setData()
     */
    public function setData(string $key, $data): void
    {
        $this->data[$key] = $data;
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::boot()
     */
    public function boot(): void
    {
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::config()
     */
    public function config(): PlaceMapperConfigInterface
    {
        return new NullPlaceMapperConfig();
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::setConfig()
     */
    public function setConfig(PlaceMapperConfigInterface $config): void
    {
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperInterface::map()
     */
    public function map(Place $place, string $feature_property): ?string
    {
        $map_def = $this->data('map');
        if ($map_def === null || !($map_def instanceof MapDefinitionInterface)) {
            return null;
        }
        $place_mappings = Registry::cache()->array()->remember(
            SimpleFrancePlaceMapper::class . '-mapping-' . $map_def->id(),
            fn(): array => $this->mappingsForMap($map_def->id())
        );

        $place_name = $place->firstParts(1)->first();
        return $place_mappings[$place_name] ?? $place_name;
    }

    /**
     * Check whether a string ($haystack) ends with another string ($needle)
     *
     * {@internal This is redundant with the function str_ends_with in PHP8}
     *
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    private function endsWith(string $haystack, string $needle): bool
    {
        return substr_compare($haystack, $needle, -strlen($needle)) === 0;
    }

    /**
     * Return the mappings to be used for a specific map
     *
     * @param string $map_id
     * @return array<string, string>
     */
    private function mappingsForMap(string $map_id): array
    {
        $mapping = [];
        if ($this->endsWith($map_id, '-departements')) {
            return self::MAPPINGS_DEPARTEMENTS;
        }

        if ($map_id === 'fr-metropole-regions-2016') {
            return self::MAPPINGS_REGIONS;
        }

        if (mb_strpos($map_id, '-communes') !== false) {
            $mapping = self::MAPPINGS_KNOWN_COMMUNES_VARIATIONS;
        }

        if ($this->endsWith($map_id, '-communes')) {
            $module = app(ModuleService::class)->findByInterface(GeoDataFranceModule::class)->first();
            if ($module === null) {
                return $mapping;
            }

            $file = $module->resourcesFolder() . '/mappings/new-communes.php';
            if (!is_file($file)) {
                return $mapping;
            }
            $mappings_new_communes = include $file;
            if (!is_array($mappings_new_communes)) {
                return $mapping;
            }

            if (preg_match('/fr-dpt-(\d{2})-communes/', $map_id, $dept_match) === 1) {
                return array_merge($mapping, $mappings_new_communes[$dept_match[1]] ?? []);
            }

            if ($map_id === 'fr-area-aubrac-lot-margeride-planeze-communes') {
                return array_merge(
                    $mapping,
                    $mappings_new_communes['12'] ?? [],
                    $mappings_new_communes['15'] ?? [],
                    $mappings_new_communes['43'] ?? [],
                    $mappings_new_communes['48'] ?? [],
                );
            }
        }
        return $mapping;
    }
}
