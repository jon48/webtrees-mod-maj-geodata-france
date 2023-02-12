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

namespace MyArtJaub\Webtrees\Module\GeoData\France\Maps;

use Fisharebest\Webtrees\I18N;
use League\Flysystem\FilesystemOperator;
use MyArtJaub\Webtrees\Common\GeoDispersion\Maps\SimpleFilesystemMap;

/**
 * FranceArrondMunicipaux
 * Auto-generated on Tue, 04 May 2021 23:39:52+01:00
 */
class FranceArrondMunicipaux
{
    /**
     * List map definitions provided by the module as an array
     *
     * @param FilesystemOperator $filesystem
     * @return array<int, \MyArtJaub\Webtrees\Contracts\GeoDispersion\MapDefinitionInterface>
     */
    public static function listMapDefinition(FilesystemOperator $filesystem): array
    {
        return [
            new SimpleFilesystemMap(
                'fr-commune-13055-arrondissements',
                I18N::translate('%s by district', 'Marseille') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'communes/13055-marseille/arrondissements-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-commune-69123-arrondissements',
                I18N::translate('%s by district', 'Lyon') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'communes/69123-lyon/arrondissements-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-commune-75056-arrondissements',
                I18N::translate('%s by district', 'Paris') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'communes/75056-paris/arrondissements-latest.geojson'
            ),
        ];
    }
}
