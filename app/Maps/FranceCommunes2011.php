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
 * FranceCommunes2011
 * Auto-generated on Tue, 04 May 2021 23:39:50+01:00
 */
class FranceCommunes2011
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
                'fr-dpt-01-communes-2011',
                I18N::translate('%s by municipality', 'Ain') . ' - ' . '2011',
                $filesystem,
                'departements/01-ain/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-02-communes-2011',
                I18N::translate('%s by municipality', 'Aisne') . ' - ' . '2011',
                $filesystem,
                'departements/02-aisne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-03-communes-2011',
                I18N::translate('%s by municipality', 'Allier') . ' - ' . '2011',
                $filesystem,
                'departements/03-allier/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-04-communes-2011',
                I18N::translate('%s by municipality', 'Alpes-de-Haute-Provence') . ' - ' . '2011',
                $filesystem,
                'departements/04-alpes-de-haute-provence/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-05-communes-2011',
                I18N::translate('%s by municipality', 'Hautes-Alpes') . ' - ' . '2011',
                $filesystem,
                'departements/05-hautes-alpes/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-06-communes-2011',
                I18N::translate('%s by municipality', 'Alpes-Maritimes') . ' - ' . '2011',
                $filesystem,
                'departements/06-alpes-maritimes/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-07-communes-2011',
                I18N::translate('%s by municipality', 'Ardèche') . ' - ' . '2011',
                $filesystem,
                'departements/07-ardeche/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-08-communes-2011',
                I18N::translate('%s by municipality', 'Ardennes') . ' - ' . '2011',
                $filesystem,
                'departements/08-ardennes/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-09-communes-2011',
                I18N::translate('%s by municipality', 'Ariège') . ' - ' . '2011',
                $filesystem,
                'departements/09-ariege/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-10-communes-2011',
                I18N::translate('%s by municipality', 'Aube') . ' - ' . '2011',
                $filesystem,
                'departements/10-aube/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-11-communes-2011',
                I18N::translate('%s by municipality', 'Aude') . ' - ' . '2011',
                $filesystem,
                'departements/11-aude/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-12-communes-2011',
                I18N::translate('%s by municipality', 'Aveyron') . ' - ' . '2011',
                $filesystem,
                'departements/12-aveyron/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-13-communes-2011',
                I18N::translate('%s by municipality', 'Bouches-du-Rhône') . ' - ' . '2011',
                $filesystem,
                'departements/13-bouches-du-rhone/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-14-communes-2011',
                I18N::translate('%s by municipality', 'Calvados') . ' - ' . '2011',
                $filesystem,
                'departements/14-calvados/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-15-communes-2011',
                I18N::translate('%s by municipality', 'Cantal') . ' - ' . '2011',
                $filesystem,
                'departements/15-cantal/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-16-communes-2011',
                I18N::translate('%s by municipality', 'Charente') . ' - ' . '2011',
                $filesystem,
                'departements/16-charente/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-17-communes-2011',
                I18N::translate('%s by municipality', 'Charente-Maritime') . ' - ' . '2011',
                $filesystem,
                'departements/17-charente-maritime/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-18-communes-2011',
                I18N::translate('%s by municipality', 'Cher') . ' - ' . '2011',
                $filesystem,
                'departements/18-cher/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-19-communes-2011',
                I18N::translate('%s by municipality', 'Corrèze') . ' - ' . '2011',
                $filesystem,
                'departements/19-correze/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-21-communes-2011',
                I18N::translate('%s by municipality', 'Côte-d\'Or') . ' - ' . '2011',
                $filesystem,
                'departements/21-cote-d-or/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-22-communes-2011',
                I18N::translate('%s by municipality', 'Côtes-d\'Armor') . ' - ' . '2011',
                $filesystem,
                'departements/22-cotes-d-armor/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-23-communes-2011',
                I18N::translate('%s by municipality', 'Creuse') . ' - ' . '2011',
                $filesystem,
                'departements/23-creuse/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-24-communes-2011',
                I18N::translate('%s by municipality', 'Dordogne') . ' - ' . '2011',
                $filesystem,
                'departements/24-dordogne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-25-communes-2011',
                I18N::translate('%s by municipality', 'Doubs') . ' - ' . '2011',
                $filesystem,
                'departements/25-doubs/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-26-communes-2011',
                I18N::translate('%s by municipality', 'Drôme') . ' - ' . '2011',
                $filesystem,
                'departements/26-drome/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-27-communes-2011',
                I18N::translate('%s by municipality', 'Eure') . ' - ' . '2011',
                $filesystem,
                'departements/27-eure/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-28-communes-2011',
                I18N::translate('%s by municipality', 'Eure-et-Loir') . ' - ' . '2011',
                $filesystem,
                'departements/28-eure-et-loir/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-29-communes-2011',
                I18N::translate('%s by municipality', 'Finistère') . ' - ' . '2011',
                $filesystem,
                'departements/29-finistere/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-2A-communes-2011',
                I18N::translate('%s by municipality', 'Corse-du-Sud') . ' - ' . '2011',
                $filesystem,
                'departements/2A-corse-du-sud/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-2B-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Corse') . ' - ' . '2011',
                $filesystem,
                'departements/2B-haute-corse/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-30-communes-2011',
                I18N::translate('%s by municipality', 'Gard') . ' - ' . '2011',
                $filesystem,
                'departements/30-gard/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-31-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Garonne') . ' - ' . '2011',
                $filesystem,
                'departements/31-haute-garonne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-32-communes-2011',
                I18N::translate('%s by municipality', 'Gers') . ' - ' . '2011',
                $filesystem,
                'departements/32-gers/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-33-communes-2011',
                I18N::translate('%s by municipality', 'Gironde') . ' - ' . '2011',
                $filesystem,
                'departements/33-gironde/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-34-communes-2011',
                I18N::translate('%s by municipality', 'Hérault') . ' - ' . '2011',
                $filesystem,
                'departements/34-herault/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-35-communes-2011',
                I18N::translate('%s by municipality', 'Ille-et-Vilaine') . ' - ' . '2011',
                $filesystem,
                'departements/35-ille-et-vilaine/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-36-communes-2011',
                I18N::translate('%s by municipality', 'Indre') . ' - ' . '2011',
                $filesystem,
                'departements/36-indre/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-37-communes-2011',
                I18N::translate('%s by municipality', 'Indre-et-Loire') . ' - ' . '2011',
                $filesystem,
                'departements/37-indre-et-loire/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-38-communes-2011',
                I18N::translate('%s by municipality', 'Isère') . ' - ' . '2011',
                $filesystem,
                'departements/38-isere/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-39-communes-2011',
                I18N::translate('%s by municipality', 'Jura') . ' - ' . '2011',
                $filesystem,
                'departements/39-jura/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-40-communes-2011',
                I18N::translate('%s by municipality', 'Landes') . ' - ' . '2011',
                $filesystem,
                'departements/40-landes/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-41-communes-2011',
                I18N::translate('%s by municipality', 'Loir-et-Cher') . ' - ' . '2011',
                $filesystem,
                'departements/41-loir-et-cher/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-42-communes-2011',
                I18N::translate('%s by municipality', 'Loire') . ' - ' . '2011',
                $filesystem,
                'departements/42-loire/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-43-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Loire') . ' - ' . '2011',
                $filesystem,
                'departements/43-haute-loire/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-44-communes-2011',
                I18N::translate('%s by municipality', 'Loire-Atlantique') . ' - ' . '2011',
                $filesystem,
                'departements/44-loire-atlantique/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-45-communes-2011',
                I18N::translate('%s by municipality', 'Loiret') . ' - ' . '2011',
                $filesystem,
                'departements/45-loiret/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-46-communes-2011',
                I18N::translate('%s by municipality', 'Lot') . ' - ' . '2011',
                $filesystem,
                'departements/46-lot/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-47-communes-2011',
                I18N::translate('%s by municipality', 'Lot-et-Garonne') . ' - ' . '2011',
                $filesystem,
                'departements/47-lot-et-garonne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-48-communes-2011',
                I18N::translate('%s by municipality', 'Lozère') . ' - ' . '2011',
                $filesystem,
                'departements/48-lozere/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-49-communes-2011',
                I18N::translate('%s by municipality', 'Maine-et-Loire') . ' - ' . '2011',
                $filesystem,
                'departements/49-maine-et-loire/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-50-communes-2011',
                I18N::translate('%s by municipality', 'Manche') . ' - ' . '2011',
                $filesystem,
                'departements/50-manche/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-51-communes-2011',
                I18N::translate('%s by municipality', 'Marne') . ' - ' . '2011',
                $filesystem,
                'departements/51-marne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-52-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Marne') . ' - ' . '2011',
                $filesystem,
                'departements/52-haute-marne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-53-communes-2011',
                I18N::translate('%s by municipality', 'Mayenne') . ' - ' . '2011',
                $filesystem,
                'departements/53-mayenne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-54-communes-2011',
                I18N::translate('%s by municipality', 'Meurthe-et-Moselle') . ' - ' . '2011',
                $filesystem,
                'departements/54-meurthe-et-moselle/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-55-communes-2011',
                I18N::translate('%s by municipality', 'Meuse') . ' - ' . '2011',
                $filesystem,
                'departements/55-meuse/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-56-communes-2011',
                I18N::translate('%s by municipality', 'Morbihan') . ' - ' . '2011',
                $filesystem,
                'departements/56-morbihan/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-57-communes-2011',
                I18N::translate('%s by municipality', 'Moselle') . ' - ' . '2011',
                $filesystem,
                'departements/57-moselle/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-58-communes-2011',
                I18N::translate('%s by municipality', 'Nièvre') . ' - ' . '2011',
                $filesystem,
                'departements/58-nievre/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-59-communes-2011',
                I18N::translate('%s by municipality', 'Nord') . ' - ' . '2011',
                $filesystem,
                'departements/59-nord/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-60-communes-2011',
                I18N::translate('%s by municipality', 'Oise') . ' - ' . '2011',
                $filesystem,
                'departements/60-oise/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-61-communes-2011',
                I18N::translate('%s by municipality', 'Orne') . ' - ' . '2011',
                $filesystem,
                'departements/61-orne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-62-communes-2011',
                I18N::translate('%s by municipality', 'Pas-de-Calais') . ' - ' . '2011',
                $filesystem,
                'departements/62-pas-de-calais/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-63-communes-2011',
                I18N::translate('%s by municipality', 'Puy-de-Dôme') . ' - ' . '2011',
                $filesystem,
                'departements/63-puy-de-dome/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-64-communes-2011',
                I18N::translate('%s by municipality', 'Pyrénées-Atlantiques') . ' - ' . '2011',
                $filesystem,
                'departements/64-pyrenees-atlantiques/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-65-communes-2011',
                I18N::translate('%s by municipality', 'Hautes-Pyrénées') . ' - ' . '2011',
                $filesystem,
                'departements/65-hautes-pyrenees/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-66-communes-2011',
                I18N::translate('%s by municipality', 'Pyrénées-Orientales') . ' - ' . '2011',
                $filesystem,
                'departements/66-pyrenees-orientales/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-67-communes-2011',
                I18N::translate('%s by municipality', 'Bas-Rhin') . ' - ' . '2011',
                $filesystem,
                'departements/67-bas-rhin/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-68-communes-2011',
                I18N::translate('%s by municipality', 'Haut-Rhin') . ' - ' . '2011',
                $filesystem,
                'departements/68-haut-rhin/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-69-communes-2011',
                I18N::translate('%s by municipality', 'Rhône') . ' - ' . '2011',
                $filesystem,
                'departements/69-rhone/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-70-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Saône') . ' - ' . '2011',
                $filesystem,
                'departements/70-haute-saone/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-71-communes-2011',
                I18N::translate('%s by municipality', 'Saône-et-Loire') . ' - ' . '2011',
                $filesystem,
                'departements/71-saone-et-loire/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-72-communes-2011',
                I18N::translate('%s by municipality', 'Sarthe') . ' - ' . '2011',
                $filesystem,
                'departements/72-sarthe/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-73-communes-2011',
                I18N::translate('%s by municipality', 'Savoie') . ' - ' . '2011',
                $filesystem,
                'departements/73-savoie/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-74-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Savoie') . ' - ' . '2011',
                $filesystem,
                'departements/74-haute-savoie/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-75-communes-2011',
                I18N::translate('%s by municipality', 'Paris') . ' - ' . '2011',
                $filesystem,
                'departements/75-paris/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-76-communes-2011',
                I18N::translate('%s by municipality', 'Seine-Maritime') . ' - ' . '2011',
                $filesystem,
                'departements/76-seine-maritime/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-77-communes-2011',
                I18N::translate('%s by municipality', 'Seine-et-Marne') . ' - ' . '2011',
                $filesystem,
                'departements/77-seine-et-marne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-78-communes-2011',
                I18N::translate('%s by municipality', 'Yvelines') . ' - ' . '2011',
                $filesystem,
                'departements/78-yvelines/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-79-communes-2011',
                I18N::translate('%s by municipality', 'Deux-Sèvres') . ' - ' . '2011',
                $filesystem,
                'departements/79-deux-sevres/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-80-communes-2011',
                I18N::translate('%s by municipality', 'Somme') . ' - ' . '2011',
                $filesystem,
                'departements/80-somme/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-81-communes-2011',
                I18N::translate('%s by municipality', 'Tarn') . ' - ' . '2011',
                $filesystem,
                'departements/81-tarn/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-82-communes-2011',
                I18N::translate('%s by municipality', 'Tarn-et-Garonne') . ' - ' . '2011',
                $filesystem,
                'departements/82-tarn-et-garonne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-83-communes-2011',
                I18N::translate('%s by municipality', 'Var') . ' - ' . '2011',
                $filesystem,
                'departements/83-var/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-84-communes-2011',
                I18N::translate('%s by municipality', 'Vaucluse') . ' - ' . '2011',
                $filesystem,
                'departements/84-vaucluse/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-85-communes-2011',
                I18N::translate('%s by municipality', 'Vendée') . ' - ' . '2011',
                $filesystem,
                'departements/85-vendee/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-86-communes-2011',
                I18N::translate('%s by municipality', 'Vienne') . ' - ' . '2011',
                $filesystem,
                'departements/86-vienne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-87-communes-2011',
                I18N::translate('%s by municipality', 'Haute-Vienne') . ' - ' . '2011',
                $filesystem,
                'departements/87-haute-vienne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-88-communes-2011',
                I18N::translate('%s by municipality', 'Vosges') . ' - ' . '2011',
                $filesystem,
                'departements/88-vosges/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-89-communes-2011',
                I18N::translate('%s by municipality', 'Yonne') . ' - ' . '2011',
                $filesystem,
                'departements/89-yonne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-90-communes-2011',
                I18N::translate('%s by municipality', 'Territoire de Belfort') . ' - ' . '2011',
                $filesystem,
                'departements/90-territoire-de-belfort/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-91-communes-2011',
                I18N::translate('%s by municipality', 'Essonne') . ' - ' . '2011',
                $filesystem,
                'departements/91-essonne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-92-communes-2011',
                I18N::translate('%s by municipality', 'Hauts-de-Seine') . ' - ' . '2011',
                $filesystem,
                'departements/92-hauts-de-seine/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-93-communes-2011',
                I18N::translate('%s by municipality', 'Seine-Saint-Denis') . ' - ' . '2011',
                $filesystem,
                'departements/93-seine-saint-denis/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-94-communes-2011',
                I18N::translate('%s by municipality', 'Val-de-Marne') . ' - ' . '2011',
                $filesystem,
                'departements/94-val-de-marne/communes-2011.geojson'
            ),
            new SimpleFilesystemMap(
                'fr-dpt-95-communes-2011',
                I18N::translate('%s by municipality', 'Val-d\'Oise') . ' - ' . '2011',
                $filesystem,
                'departements/95-val-d-oise/communes-2011.geojson'
            ),
        ];
    }
}
