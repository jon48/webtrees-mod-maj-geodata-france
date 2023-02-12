<?php

/**
 * webtrees-mod-maj-geodata-france: MyArtJaub Geographical data for webtrees - France
 *
 * @package MyArtJaub\Webtrees\Module\GeoData
 * @subpackage France
 * @author Jonathan Jaubart <dev@jaubart.com>
 * @copyright Copyright (c) 2021-2023, Jonathan Jaubart
 * @license https://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */

declare(strict_types=1);

namespace MyArtJaub\Webtrees\Module\GeoData\France;

use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use League\Flysystem\Filesystem;
use League\Flysystem\Local\LocalFilesystemAdapter;
use MyArtJaub\Webtrees\Common\GeoDispersion\Maps\SimpleFilesystemMap;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\ModuleMapDefinitionProviderInterface;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\ModulePlaceMapperProviderInterface;
use MyArtJaub\Webtrees\Module\ModuleMyArtJaubInterface;
use MyArtJaub\Webtrees\Module\ModuleMyArtJaubTrait;
use MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceArrondMunicipaux;
use MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceCodePostauxLatest;
use MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceCommunes2011;
use MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceCommunesLatest;
use MyArtJaub\Webtrees\Module\GeoData\France\PlaceMappers\SimpleFrancePlaceMapper;

/**
 * Geographical Data Module - France.
 */
class GeoDataFranceModule extends AbstractModule implements
    ModuleMyArtJaubInterface,
    ModuleMapDefinitionProviderInterface,
    ModulePlaceMapperProviderInterface
{
    use ModuleMyArtJaubTrait;

    /**
     * {@inheritDoc}
     * @see \Fisharebest\Webtrees\Module\AbstractModule::title()
     */
    public function title(): string
    {
        return I18N::translate('Geographical data - France');
    }

    /**
     * {@inheritDoc}
     * @see \Fisharebest\Webtrees\Module\AbstractModule::description()
     */
    public function description(): string
    {
        return I18N::translate('Data to be used in geographical data analysis - France');
    }

    /**
     * {@inheritDoc}
     * @see \Fisharebest\Webtrees\Module\ModuleCustomInterface::customModuleVersion()
     */
    public function customModuleVersion(): string
    {
        return '2.1.1-v.1';
    }

    /**
     * {@inheritDoc}
     * @see \Fisharebest\Webtrees\Module\ModuleCustomInterface::customModuleSupportUrl()
     */
    public function customModuleSupportUrl(): string
    {
        return 'https://github.com/jon48/webtrees-mod-maj-geodata-france';
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\ModuleMapDefinitionProviderInterface::listMapDefinition()
     */
    public function listMapDefinition(): array
    {
        $filesystem = new Filesystem(new LocalFilesystemAdapter($this->resourcesFolder() . 'maps/'));

        //phpcs:disable Generic.Files.LineLength.TooLong
        return [
            new SimpleFilesystemMap(
                'fr-metropole-regions-2016',
                I18N::translate('Metropolitan France by region') . ' (2016-)',
                $filesystem,
                'metropole-regions-2016.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-metropole-regions-1970',
                I18N::translate('Metropolitan France by region') . ' (1970-2015)',
                $filesystem,
                'metropole-regions-1970.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-metropole-departements',
                I18N::translate('Metropolitan France by department'),
                $filesystem,
                'metropole-departements.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-area-aubrac-lot-margeride-planeze-communes',
                I18N::translate('%s by municipality', 'Aubrac-Margeride-Planèze-Vallée du Lot') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'areas/aubrac-lot-margeride-planeze/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-area-aubrac-lot-margeride-planeze-communes-2011',
                I18N::translate('%s by municipality', 'Aubrac-Margeride-Planèze-Vallée du Lot') . ' - 2011',
                $filesystem,
                'areas/aubrac-lot-margeride-planeze/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-area-aubrac-lot-margeride-planeze-codespostaux',
                I18N::translate('%s by zip code', 'Aubrac-Margeride-Planèze-Vallée du Lot') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'areas/aubrac-lot-margeride-planeze/codespostaux-latest.geojson'
            ),
            ...FranceCommunesLatest::listMapDefinition($filesystem),
            ...FranceCommunes2011::listMapDefinition($filesystem),
            ...FranceCodePostauxLatest::listMapDefinition($filesystem),
            ...FranceArrondMunicipaux::listMapDefinition($filesystem)
        ];
        //phpcs:enable
    }

    /**
     * {@inheritDoc}
     * @see \MyArtJaub\Webtrees\Contracts\GeoDispersion\ModulePlaceMapperProviderInterface::listPlaceMappers()
     */
    public function listPlaceMappers(): array
    {
        return [
            SimpleFrancePlaceMapper::class
        ];
    }
}
