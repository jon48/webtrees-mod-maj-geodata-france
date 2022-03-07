<?php

/**
 * webtrees-mod-maj-geodata-france: MyArtJaub Geographical data for webtrees - France
 *
 * @package MyArtJaub\Webtrees\Module\GeoData
 * @subpackage France
 * @author Jonathan Jaubart <dev@jaubart.com>
 * @copyright Copyright (c) 2021, Jonathan Jaubart
 * @license https://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */

declare(strict_types=1);

namespace MyArtJaub\Webtrees\Module\GeoData\France\Maps;

use Fisharebest\Webtrees\I18N;
use League\Flysystem\FilesystemOperator;
use MyArtJaub\Webtrees\Common\GeoDispersion\Maps\SimpleFilesystemMap;

/**
 * FranceCommunesLatest
 * Auto-generated on Tue, 04 May 2021 23:39:44+01:00
 */
class FranceCommunesLatest
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
                'fr-dpt-01-communes',
                I18N::translate('%s by municipality', 'Ain') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/01-ain/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-02-communes',
                I18N::translate('%s by municipality', 'Aisne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/02-aisne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-03-communes',
                I18N::translate('%s by municipality', 'Allier') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/03-allier/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-04-communes',
                I18N::translate('%s by municipality', 'Alpes-de-Haute-Provence') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/04-alpes-de-haute-provence/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-05-communes',
                I18N::translate('%s by municipality', 'Hautes-Alpes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/05-hautes-alpes/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-06-communes',
                I18N::translate('%s by municipality', 'Alpes-Maritimes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/06-alpes-maritimes/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-07-communes',
                I18N::translate('%s by municipality', 'Ardèche') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/07-ardeche/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-08-communes',
                I18N::translate('%s by municipality', 'Ardennes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/08-ardennes/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-09-communes',
                I18N::translate('%s by municipality', 'Ariège') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/09-ariege/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-10-communes',
                I18N::translate('%s by municipality', 'Aube') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/10-aube/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-11-communes',
                I18N::translate('%s by municipality', 'Aude') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/11-aude/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-12-communes',
                I18N::translate('%s by municipality', 'Aveyron') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/12-aveyron/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-13-communes',
                I18N::translate('%s by municipality', 'Bouches-du-Rhône') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/13-bouches-du-rhone/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-14-communes',
                I18N::translate('%s by municipality', 'Calvados') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/14-calvados/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-15-communes',
                I18N::translate('%s by municipality', 'Cantal') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/15-cantal/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-16-communes',
                I18N::translate('%s by municipality', 'Charente') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/16-charente/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-17-communes',
                I18N::translate('%s by municipality', 'Charente-Maritime') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/17-charente-maritime/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-18-communes',
                I18N::translate('%s by municipality', 'Cher') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/18-cher/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-19-communes',
                I18N::translate('%s by municipality', 'Corrèze') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/19-correze/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-21-communes',
                I18N::translate('%s by municipality', 'Côte-d\'Or') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/21-cote-d-or/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-22-communes',
                I18N::translate('%s by municipality', 'Côtes-d\'Armor') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/22-cotes-d-armor/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-23-communes',
                I18N::translate('%s by municipality', 'Creuse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/23-creuse/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-24-communes',
                I18N::translate('%s by municipality', 'Dordogne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/24-dordogne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-25-communes',
                I18N::translate('%s by municipality', 'Doubs') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/25-doubs/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-26-communes',
                I18N::translate('%s by municipality', 'Drôme') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/26-drome/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-27-communes',
                I18N::translate('%s by municipality', 'Eure') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/27-eure/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-28-communes',
                I18N::translate('%s by municipality', 'Eure-et-Loir') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/28-eure-et-loir/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-29-communes',
                I18N::translate('%s by municipality', 'Finistère') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/29-finistere/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-2A-communes',
                I18N::translate('%s by municipality', 'Corse-du-Sud') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/2A-corse-du-sud/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-2B-communes',
                I18N::translate('%s by municipality', 'Haute-Corse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/2B-haute-corse/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-30-communes',
                I18N::translate('%s by municipality', 'Gard') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/30-gard/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-31-communes',
                I18N::translate('%s by municipality', 'Haute-Garonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/31-haute-garonne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-32-communes',
                I18N::translate('%s by municipality', 'Gers') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/32-gers/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-33-communes',
                I18N::translate('%s by municipality', 'Gironde') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/33-gironde/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-34-communes',
                I18N::translate('%s by municipality', 'Hérault') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/34-herault/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-35-communes',
                I18N::translate('%s by municipality', 'Ille-et-Vilaine') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/35-ille-et-vilaine/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-36-communes',
                I18N::translate('%s by municipality', 'Indre') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/36-indre/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-37-communes',
                I18N::translate('%s by municipality', 'Indre-et-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/37-indre-et-loire/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-38-communes',
                I18N::translate('%s by municipality', 'Isère') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/38-isere/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-39-communes',
                I18N::translate('%s by municipality', 'Jura') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/39-jura/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-40-communes',
                I18N::translate('%s by municipality', 'Landes') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/40-landes/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-41-communes',
                I18N::translate('%s by municipality', 'Loir-et-Cher') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/41-loir-et-cher/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-42-communes',
                I18N::translate('%s by municipality', 'Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/42-loire/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-43-communes',
                I18N::translate('%s by municipality', 'Haute-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/43-haute-loire/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-44-communes',
                I18N::translate('%s by municipality', 'Loire-Atlantique') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/44-loire-atlantique/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-45-communes',
                I18N::translate('%s by municipality', 'Loiret') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/45-loiret/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-46-communes',
                I18N::translate('%s by municipality', 'Lot') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/46-lot/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-47-communes',
                I18N::translate('%s by municipality', 'Lot-et-Garonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/47-lot-et-garonne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-48-communes',
                I18N::translate('%s by municipality', 'Lozère') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/48-lozere/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-49-communes',
                I18N::translate('%s by municipality', 'Maine-et-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/49-maine-et-loire/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-50-communes',
                I18N::translate('%s by municipality', 'Manche') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/50-manche/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-51-communes',
                I18N::translate('%s by municipality', 'Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/51-marne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-52-communes',
                I18N::translate('%s by municipality', 'Haute-Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/52-haute-marne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-53-communes',
                I18N::translate('%s by municipality', 'Mayenne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/53-mayenne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-54-communes',
                I18N::translate('%s by municipality', 'Meurthe-et-Moselle') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/54-meurthe-et-moselle/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-55-communes',
                I18N::translate('%s by municipality', 'Meuse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/55-meuse/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-56-communes',
                I18N::translate('%s by municipality', 'Morbihan') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/56-morbihan/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-57-communes',
                I18N::translate('%s by municipality', 'Moselle') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/57-moselle/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-58-communes',
                I18N::translate('%s by municipality', 'Nièvre') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/58-nievre/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-59-communes',
                I18N::translate('%s by municipality', 'Nord') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/59-nord/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-60-communes',
                I18N::translate('%s by municipality', 'Oise') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/60-oise/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-61-communes',
                I18N::translate('%s by municipality', 'Orne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/61-orne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-62-communes',
                I18N::translate('%s by municipality', 'Pas-de-Calais') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/62-pas-de-calais/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-63-communes',
                I18N::translate('%s by municipality', 'Puy-de-Dôme') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/63-puy-de-dome/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-64-communes',
                I18N::translate('%s by municipality', 'Pyrénées-Atlantiques') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/64-pyrenees-atlantiques/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-65-communes',
                I18N::translate('%s by municipality', 'Hautes-Pyrénées') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/65-hautes-pyrenees/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-66-communes',
                I18N::translate('%s by municipality', 'Pyrénées-Orientales') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/66-pyrenees-orientales/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-67-communes',
                I18N::translate('%s by municipality', 'Bas-Rhin') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/67-bas-rhin/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-68-communes',
                I18N::translate('%s by municipality', 'Haut-Rhin') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/68-haut-rhin/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-69-communes',
                I18N::translate('%s by municipality', 'Rhône') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/69-rhone/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-70-communes',
                I18N::translate('%s by municipality', 'Haute-Saône') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/70-haute-saone/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-71-communes',
                I18N::translate('%s by municipality', 'Saône-et-Loire') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/71-saone-et-loire/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-72-communes',
                I18N::translate('%s by municipality', 'Sarthe') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/72-sarthe/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-73-communes',
                I18N::translate('%s by municipality', 'Savoie') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/73-savoie/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-74-communes',
                I18N::translate('%s by municipality', 'Haute-Savoie') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/74-haute-savoie/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-75-communes',
                I18N::translate('%s by municipality', 'Paris') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/75-paris/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-76-communes',
                I18N::translate('%s by municipality', 'Seine-Maritime') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/76-seine-maritime/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-77-communes',
                I18N::translate('%s by municipality', 'Seine-et-Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/77-seine-et-marne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-78-communes',
                I18N::translate('%s by municipality', 'Yvelines') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/78-yvelines/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-79-communes',
                I18N::translate('%s by municipality', 'Deux-Sèvres') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/79-deux-sevres/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-80-communes',
                I18N::translate('%s by municipality', 'Somme') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/80-somme/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-81-communes',
                I18N::translate('%s by municipality', 'Tarn') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/81-tarn/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-82-communes',
                I18N::translate('%s by municipality', 'Tarn-et-Garonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/82-tarn-et-garonne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-83-communes',
                I18N::translate('%s by municipality', 'Var') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/83-var/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-84-communes',
                I18N::translate('%s by municipality', 'Vaucluse') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/84-vaucluse/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-85-communes',
                I18N::translate('%s by municipality', 'Vendée') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/85-vendee/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-86-communes',
                I18N::translate('%s by municipality', 'Vienne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/86-vienne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-87-communes',
                I18N::translate('%s by municipality', 'Haute-Vienne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/87-haute-vienne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-88-communes',
                I18N::translate('%s by municipality', 'Vosges') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/88-vosges/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-89-communes',
                I18N::translate('%s by municipality', 'Yonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/89-yonne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-90-communes',
                I18N::translate('%s by municipality', 'Territoire de Belfort') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/90-territoire-de-belfort/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-91-communes',
                I18N::translate('%s by municipality', 'Essonne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/91-essonne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-92-communes',
                I18N::translate('%s by municipality', 'Hauts-de-Seine') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/92-hauts-de-seine/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-93-communes',
                I18N::translate('%s by municipality', 'Seine-Saint-Denis') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/93-seine-saint-denis/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-94-communes',
                I18N::translate('%s by municipality', 'Val-de-Marne') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/94-val-de-marne/communes-latest.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-95-communes',
                I18N::translate('%s by municipality', 'Val-d\'Oise') . ' - ' . I18N::translate('Latest'),
                $filesystem,
                'departements/95-val-d-oise/communes-latest.geojson'
            ),
        ];
    }
}
