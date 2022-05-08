<?php

/**
 * webtrees-mod-maj-geodata-france: MyArtJaub Geographical data for webtrees - France
 *
 * @package MyArtJaub\Webtrees\Module\GeoData
 * @subpackage France
 * @author Jonathan Jaubart <dev@jaubart.com>
 * @copyright Copyright (c) 2021-2022, Jonathan Jaubart
 * @license https://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */

declare(strict_types=1);

namespace MyArtJaub\Webtrees\Module\GeoData\France\Maps;

use Fisharebest\Webtrees\I18N;
use League\Flysystem\FilesystemOperator;
use MyArtJaub\Webtrees\Common\GeoDispersion\Maps\SimpleFilesystemMap;

/**
 * FranceCodePostauxLatest
 * Auto-generated on Tue, 04 May 2021 23:39:51+01:00
 */
class FranceCodePostauxLatest
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
                'fr-dpt-01-codespostaux',
                I18N::translate('%s by zip code', 'Ain') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/01-ain/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-02-codespostaux',
                I18N::translate('%s by zip code', 'Aisne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/02-aisne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-03-codespostaux',
                I18N::translate('%s by zip code', 'Allier') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/03-allier/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-04-codespostaux',
                I18N::translate('%s by zip code', 'Alpes-de-Haute-Provence') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/04-alpes-de-haute-provence/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-05-codespostaux',
                I18N::translate('%s by zip code', 'Hautes-Alpes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/05-hautes-alpes/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-06-codespostaux',
                I18N::translate('%s by zip code', 'Alpes-Maritimes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/06-alpes-maritimes/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-07-codespostaux',
                I18N::translate('%s by zip code', 'Ardèche') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/07-ardeche/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-08-codespostaux',
                I18N::translate('%s by zip code', 'Ardennes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/08-ardennes/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-09-codespostaux',
                I18N::translate('%s by zip code', 'Ariège') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/09-ariege/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-10-codespostaux',
                I18N::translate('%s by zip code', 'Aube') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/10-aube/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-11-codespostaux',
                I18N::translate('%s by zip code', 'Aude') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/11-aude/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-12-codespostaux',
                I18N::translate('%s by zip code', 'Aveyron') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/12-aveyron/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-13-codespostaux',
                I18N::translate('%s by zip code', 'Bouches-du-Rhône') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/13-bouches-du-rhone/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-14-codespostaux',
                I18N::translate('%s by zip code', 'Calvados') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/14-calvados/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-15-codespostaux',
                I18N::translate('%s by zip code', 'Cantal') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/15-cantal/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-16-codespostaux',
                I18N::translate('%s by zip code', 'Charente') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/16-charente/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-17-codespostaux',
                I18N::translate('%s by zip code', 'Charente-Maritime') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/17-charente-maritime/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-18-codespostaux',
                I18N::translate('%s by zip code', 'Cher') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/18-cher/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-19-codespostaux',
                I18N::translate('%s by zip code', 'Corrèze') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/19-correze/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-21-codespostaux',
                I18N::translate('%s by zip code', 'Côte-d\'Or') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/21-cote-d-or/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-22-codespostaux',
                I18N::translate('%s by zip code', 'Côtes-d\'Armor') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/22-cotes-d-armor/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-23-codespostaux',
                I18N::translate('%s by zip code', 'Creuse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/23-creuse/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-24-codespostaux',
                I18N::translate('%s by zip code', 'Dordogne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/24-dordogne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-25-codespostaux',
                I18N::translate('%s by zip code', 'Doubs') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/25-doubs/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-26-codespostaux',
                I18N::translate('%s by zip code', 'Drôme') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/26-drome/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-27-codespostaux',
                I18N::translate('%s by zip code', 'Eure') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/27-eure/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-28-codespostaux',
                I18N::translate('%s by zip code', 'Eure-et-Loir') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/28-eure-et-loir/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-29-codespostaux',
                I18N::translate('%s by zip code', 'Finistère') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/29-finistere/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-2A-codespostaux',
                I18N::translate('%s by zip code', 'Corse-du-Sud') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/2A-corse-du-sud/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-30-codespostaux',
                I18N::translate('%s by zip code', 'Gard') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/30-gard/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-31-codespostaux',
                I18N::translate('%s by zip code', 'Haute-Garonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/31-haute-garonne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-32-codespostaux',
                I18N::translate('%s by zip code', 'Gers') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/32-gers/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-33-codespostaux',
                I18N::translate('%s by zip code', 'Gironde') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/33-gironde/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-34-codespostaux',
                I18N::translate('%s by zip code', 'Hérault') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/34-herault/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-35-codespostaux',
                I18N::translate('%s by zip code', 'Ille-et-Vilaine') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/35-ille-et-vilaine/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-36-codespostaux',
                I18N::translate('%s by zip code', 'Indre') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/36-indre/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-37-codespostaux',
                I18N::translate('%s by zip code', 'Indre-et-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/37-indre-et-loire/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-38-codespostaux',
                I18N::translate('%s by zip code', 'Isère') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/38-isere/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-39-codespostaux',
                I18N::translate('%s by zip code', 'Jura') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/39-jura/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-40-codespostaux',
                I18N::translate('%s by zip code', 'Landes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/40-landes/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-41-codespostaux',
                I18N::translate('%s by zip code', 'Loir-et-Cher') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/41-loir-et-cher/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-42-codespostaux',
                I18N::translate('%s by zip code', 'Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/42-loire/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-43-codespostaux',
                I18N::translate('%s by zip code', 'Haute-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/43-haute-loire/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-44-codespostaux',
                I18N::translate('%s by zip code', 'Loire-Atlantique') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/44-loire-atlantique/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-45-codespostaux',
                I18N::translate('%s by zip code', 'Loiret') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/45-loiret/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-46-codespostaux',
                I18N::translate('%s by zip code', 'Lot') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/46-lot/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-47-codespostaux',
                I18N::translate('%s by zip code', 'Lot-et-Garonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/47-lot-et-garonne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-48-codespostaux',
                I18N::translate('%s by zip code', 'Lozère') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/48-lozere/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-49-codespostaux',
                I18N::translate('%s by zip code', 'Maine-et-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/49-maine-et-loire/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-50-codespostaux',
                I18N::translate('%s by zip code', 'Manche') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/50-manche/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-51-codespostaux',
                I18N::translate('%s by zip code', 'Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/51-marne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-52-codespostaux',
                I18N::translate('%s by zip code', 'Haute-Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/52-haute-marne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-53-codespostaux',
                I18N::translate('%s by zip code', 'Mayenne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/53-mayenne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-54-codespostaux',
                I18N::translate('%s by zip code', 'Meurthe-et-Moselle') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/54-meurthe-et-moselle/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-55-codespostaux',
                I18N::translate('%s by zip code', 'Meuse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/55-meuse/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-56-codespostaux',
                I18N::translate('%s by zip code', 'Morbihan') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/56-morbihan/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-57-codespostaux',
                I18N::translate('%s by zip code', 'Moselle') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/57-moselle/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-58-codespostaux',
                I18N::translate('%s by zip code', 'Nièvre') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/58-nievre/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-59-codespostaux',
                I18N::translate('%s by zip code', 'Nord') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/59-nord/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-60-codespostaux',
                I18N::translate('%s by zip code', 'Oise') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/60-oise/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-61-codespostaux',
                I18N::translate('%s by zip code', 'Orne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/61-orne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-62-codespostaux',
                I18N::translate('%s by zip code', 'Pas-de-Calais') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/62-pas-de-calais/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-63-codespostaux',
                I18N::translate('%s by zip code', 'Puy-de-Dôme') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/63-puy-de-dome/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-64-codespostaux',
                I18N::translate('%s by zip code', 'Pyrénées-Atlantiques') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/64-pyrenees-atlantiques/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-65-codespostaux',
                I18N::translate('%s by zip code', 'Hautes-Pyrénées') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/65-hautes-pyrenees/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-66-codespostaux',
                I18N::translate('%s by zip code', 'Pyrénées-Orientales') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/66-pyrenees-orientales/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-67-codespostaux',
                I18N::translate('%s by zip code', 'Bas-Rhin') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/67-bas-rhin/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-68-codespostaux',
                I18N::translate('%s by zip code', 'Haut-Rhin') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/68-haut-rhin/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-69-codespostaux',
                I18N::translate('%s by zip code', 'Rhône') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/69-rhone/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-70-codespostaux',
                I18N::translate('%s by zip code', 'Haute-Saône') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/70-haute-saone/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-71-codespostaux',
                I18N::translate('%s by zip code', 'Saône-et-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/71-saone-et-loire/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-72-codespostaux',
                I18N::translate('%s by zip code', 'Sarthe') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/72-sarthe/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-73-codespostaux',
                I18N::translate('%s by zip code', 'Savoie') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/73-savoie/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-74-codespostaux',
                I18N::translate('%s by zip code', 'Haute-Savoie') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/74-haute-savoie/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-75-codespostaux',
                I18N::translate('%s by zip code', 'Paris') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/75-paris/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-76-codespostaux',
                I18N::translate('%s by zip code', 'Seine-Maritime') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/76-seine-maritime/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-77-codespostaux',
                I18N::translate('%s by zip code', 'Seine-et-Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/77-seine-et-marne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-78-codespostaux',
                I18N::translate('%s by zip code', 'Yvelines') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/78-yvelines/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-79-codespostaux',
                I18N::translate('%s by zip code', 'Deux-Sèvres') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/79-deux-sevres/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-80-codespostaux',
                I18N::translate('%s by zip code', 'Somme') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/80-somme/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-81-codespostaux',
                I18N::translate('%s by zip code', 'Tarn') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/81-tarn/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-82-codespostaux',
                I18N::translate('%s by zip code', 'Tarn-et-Garonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/82-tarn-et-garonne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-83-codespostaux',
                I18N::translate('%s by zip code', 'Var') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/83-var/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-84-codespostaux',
                I18N::translate('%s by zip code', 'Vaucluse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/84-vaucluse/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-85-codespostaux',
                I18N::translate('%s by zip code', 'Vendée') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/85-vendee/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-86-codespostaux',
                I18N::translate('%s by zip code', 'Vienne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/86-vienne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-87-codespostaux',
                I18N::translate('%s by zip code', 'Haute-Vienne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/87-haute-vienne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-88-codespostaux',
                I18N::translate('%s by zip code', 'Vosges') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/88-vosges/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-89-codespostaux',
                I18N::translate('%s by zip code', 'Yonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/89-yonne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-90-codespostaux',
                I18N::translate('%s by zip code', 'Territoire de Belfort') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/90-territoire-de-belfort/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-91-codespostaux',
                I18N::translate('%s by zip code', 'Essonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/91-essonne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-92-codespostaux',
                I18N::translate('%s by zip code', 'Hauts-de-Seine') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/92-hauts-de-seine/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-93-codespostaux',
                I18N::translate('%s by zip code', 'Seine-Saint-Denis') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/93-seine-saint-denis/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-94-codespostaux',
                I18N::translate('%s by zip code', 'Val-de-Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/94-val-de-marne/codespostaux-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-95-codespostaux',
                I18N::translate('%s by zip code', 'Val-d\'Oise') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/95-val-d-oise/codespostaux-latest.geojson'
            ),
        ];
    }
}
