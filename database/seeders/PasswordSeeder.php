<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PasswordSolution;

class PasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password1 = new PasswordSolution();
        $password1->name = 'Andrés M. del Río ';
        $password1->element = 'Vanadio';
        $password1->discovery_year = '1801';
        $password1->text = 'Andrés Manuel del Río Fernández (Madrid, 10 de noviembre de 1764 — Ciudad de México, 23 de marzo de 1849) fue un científico y naturalista español, nacionalizado mexicano, descubridor del elemento químico vanadio en el año 1801, al que él denominó eritronio.';
        $password1->code = 'V1801';
        $password1->image = 'Andrés-M-del-Río.jpg';

        $password2 = new PasswordSolution();
        $password2->name = 'Bernard Courtois';
        $password2->element = 'Iodo';
        $password2->discovery_year = '1811';
        $password2->text = 'Bernard Courtois, a veces escrito Barnard Courtois, (12 de febrero de 1777, Dijon, Francia - 27 de septiembre de 1838) fue un químico francés, conocido por su descubrimiento de la morfina, y en especial el yodo que descubrio en el año 1811, que tuvo un impacto considerable en la medicina y en el desarrollo de fotografía.';
        $password2->code = 'I1811';
        $password2->image = 'Bernard-Courtois.jpg';

        $password3 = new PasswordSolution();
        $password3->name = 'Carl W. Scheele';
        $password3->element = 'Oxigeno';
        $password3->discovery_year = '1772';
        $password3->text = 'Carl Wilhelm Scheele (Stralsund, Pomerania sueca, en la actual Alemania, 19 de diciembre de 1742-Köping, Suecia, 21 de mayo de 1786) fue un químico sueco conocido por sus trabajos farmacéuticos y por el descubrimiento de muchos elementos y sustancias químicas, de los que el más importante fue el oxígeno, el cual descubrio en 1772, de forma independiente y algún tiempo antes que Joseph Priestley. ';
        $password3->code = 'O1772';
        $password3->image = 'Carl-W-Scheele.jpg';

        $password4 = new PasswordSolution();
        $password4->name = 'Daniel Rutherford';
        $password4->element = 'Nitrogeno';
        $password4->discovery_year = '1772';
        $password4->text = 'Daniel Rutherford (Edimburgo, Escocia, 6 de noviembre de 1749- Edimburgo, 15 de noviembre de 1819) fue un médico, químico, y botánico escocés. Siendo aún estudiante, descubrió la existencia del nitrógeno en 1772, de manera independiente a estudios paralelos de Scheele.';
        $password4->code = 'N1772';
        $password4->image = 'Daniel-Rutherford.jpg';

        $password5 = new PasswordSolution();
        $password5->name = 'Fausto Elhuyar';
        $password5->element = 'Wolframio';
        $password5->discovery_year = '1783';
        $password5->text = 'Fausto Fermín de Elhuyar(Logroño, 11 de octubre de 1755 – Madrid, 6 de febrero de 1833)1​ fue un químico e ingeniero de minas español, descubridor del wolframio junto a su hermano Juan José Elhuyar en 1783​ También estuvo al cargo del Real Seminario de Minería de la Ciudad de México. Elhuyar abandonó Nueva España justo después de la independencia.';
        $password5->code = 'W1783';
        $password5->image = 'Fausto-Elhuyar.jpg';

        $password6 = new PasswordSolution();
        $password6->name = 'Hennig Brand';
        $password6->element = 'Fósforo';
        $password6->discovery_year = '1669';
        $password6->text = 'Hennig Brand (1630-1710) fue un comerciante, soplador de vidrio, farmacéutico y alquimista aficionado alemán que vivió y trabajó en Hamburgo, recordado por haber descubierto el fósforo alrededor de 1669. Comunicó su secreto a Daniel Kraft con la condición de no revelarlo a nadie.';
        $password6->code = 'P1669';
        $password6->image = 'Hennig-Brand.jpg';

        $password7 = new PasswordSolution();
        $password7->name = 'Henri Moissan ';
        $password7->element = 'Fluor';
        $password7->discovery_year = '1886';
        $password7->text = 'Henri Moissan (París, 28 de septiembre de 1852 - París, 20 de febrero de 1907) fue un farmacéutico, químico y profesor universitario francés, descubrio el fluor en 1886 y fue premio Nobel de Química de 1906​';
        $password7->code = 'F1886';
        $password7->image = 'Henri-Moissan.jpg';

        $password8 = new PasswordSolution();
        $password8->name = 'Henry Cavendish ';
        $password8->element = 'hidrogeno';
        $password8->discovery_year = '1766';
        $password8->text = 'Henry Cavendish (Reino Unido; Niza, Reino de Cerdeña, 10 de octubre de 1731-Londres, Reino Unido, 24 de febrero de 1810) fue un físico y químico británico y francés. Como físico, es conocido por el experimento de Cavendish y como químico, por el descubrimiento del hidrógeno en 1766.';
        $password8->code = 'H1766';
        $password8->image = 'Henry-Cavendish.jpg';

        $password9 = new PasswordSolution();
        $password9->name = 'Humphrey Davy';
        $password9->element = 'Potasio';
        $password9->discovery_year = '1807';
        $password9->text = 'Sir Humphrey Davy, 1er Baronet, conocido como Humphrey Davy (Penzance, Cornualles,1​ Reino Unido, 17 de diciembre de 1778 - Ginebra, Suiza, 29 de mayo de 1829) fue un químico británico descubridor del potasio en 1807, considerado el fundador de la electroquímica, junto con Alessandro Volta y Michael Faraday.';
        $password9->code = 'K1807';
        $password9->image = 'Humphrey-Davy.jpg';

        $password10 = new PasswordSolution();
        $password10->name = 'Johan Gadolin  ';
        $password10->element = 'Ireio';
        $password10->discovery_year = '1794';
        $password10->text = 'Johan Gadolin (Turku, Flag of Finland.svg Finlandia, 5 de junio de 1760 - 15 de agosto de 1852) fue un químico, físico y mineralogista finés. Fue el descubridor del elemento químico itrio en 1794. Además de ese descubrimiento, fue el fundador de la investigación química finesa.';
        $password10->code = 'I1794';
        $password10->image = 'Johan-Gadolin.jpg';

        $password11 = new PasswordSolution();
        $password11->name = 'Juan J. Elhuyar ';
        $password11->element = 'Wolframio';
        $password11->discovery_year = '1783';
        $password11->text = 'Juan José Delhuyar y Lubice (Logroño, 15 de junio de 1754-Bogotá, 20 de septiembre de 1796) fue un químico español que junto a su hermano Fausto logró aislar el wolframio por primera vez en 1783, hecho que aconteció en las instalaciones que la Real Sociedad Bascongada de Amigos del País tenía en la localidad guipuzcoana de Vergara.';
        $password11->code = 'W1783';
        $password11->image = 'Juan-J-Elhuyar.jpg';

        $password12 = new PasswordSolution();
        $password12->name = 'Louis J. Gay-Lussac';
        $password12->element = 'Boro';
        $password12->discovery_year = '1808';
        $password12->text = 'Louis J. Gay-Lussac, (Saint-Léonard-de-Noblat, 6 de diciembre de 1778-París, 9 de mayo de 1850) fue un químico y físico francés. Es conocido en la actualidad por su contribución a las leyes de los gases y el descubrimiento del boro en 1808.';
        $password12->code = 'B1808';
        $password12->image = 'Louis-J-Gay-Lussac.jpg';

        $password13 = new PasswordSolution();
        $password13->name = 'Louis J. Thenard';
        $password13->element = 'Boro';
        $password13->discovery_year = '1808';
        $password13->text = 'Louis Jacques Thénard (La Louptière-Thénard, 4 de mayo de 1777 - París, 21 de junio de 1857) fue un químico y farmacéutico francés, descubridor del agua oxigenada y del boro en 1808.';
        $password13->code = 'B1808';
        $password13->image = 'Louis-J-Thenard.jpg';

        $password14 = new PasswordSolution();
        $password14->name = 'Martin H. Klaproth';
        $password14->element = 'Uranio';
        $password14->discovery_year = '1789';
        $password14->text = 'Martin Heinrich Klaproth ( Wernigerode, Brandeburgo, Alemania, 1 de diciembre de 1743 - † Berlín, Alemania, 1 de enero de 1817 ) fue un químico alemán. Descubrió el uranio, el circonio, el titanio y el telurio en 1798, ya que aisló este último metal y le dio ese nombre, pero el descubrimiento se atribuyó a Müller.';
        $password14->code = 'U1789';
        $password14->image = 'Martin-H-Klaproth.jpg';

        $password15 = new PasswordSolution();
        $password15->name = 'Anders G. Ekeberg';
        $password15->element = 'Tántalo';
        $password15->discovery_year = '1802';
        $password15->text = 'Anders Gustaf Ekeberg (Estocolmo, Suecia, 16 de enero de 1767 - Upsala, Suecia, 11 de febrero de 1813) fue un químico sueco que descubrió en 1802 el tántalo. Una enfermedad infantil le dejó parcialmente sordo1​ y un accidente cuando explotó un matraz le quitó la visión de un ojo.';
        $password15->image = 'Anders-G-Ekeberg.jpg';

        $password16 = new PasswordSolution();
        $password16->name = 'Andre L. Debierne';
        $password16->element = 'Actinio';
        $password16->discovery_year = '1874';
        $password16->text = 'André-Louis Debierne (París, 14 de julio de 1874 – París, 31 de agosto de 1949) fue un físico y químico francés descubridor del elemento actinio en 1899.';
        $password16->image = 'Andre-L-Debierne.png';

        $password17 = new PasswordSolution();
        $password17->name = 'Antoine Bussy';
        $password17->element = 'Magnesio';
        $password17->discovery_year = '1755';
        $password17->text = 'Antoine Alexandre Brutus Bussy (29 de mayo de 1794, Marsella - 1 de febrero de 1882, París) fue un químico francés que descubrio el magnesio en 1755. El se centró principalmente en los productos farmacéuticos.';
        $password17->image = 'Antoine-Bussy.jpg';

        $password18 = new PasswordSolution();
        $password18->name = 'Antoine J. Balard';
        $password18->element = 'Bromo';
        $password18->discovery_year = '1826';
        $password18->text = 'Antoine-Jérôme Balard (Montpellier, 30 de septiembre 1802 - París, 30 de marzo 1876), también conocido como Antoine Balard, fue un químico y farmacéutico francés, descubridor del bromo en 1826.';
        $password18->image = 'Antoine-J-Balard.jpg';

        $password19 = new PasswordSolution();
        $password19->name = 'Antonio de Ulloa';
        $password19->element = 'Platino';
        $password19->discovery_year = '1735';
        $password19->text = 'Antonio de Ulloa y de la Torre-Guiral (Sevilla, 12 de enero de 1716-Isla de León, 5 de julio de 1795) fue un naturalista, militar y escritor español. Fue Gobernador de Luisiana. Se le considera descubridor del platino en 1735.​';
        $password19->image = 'Antonio-de-Ulloa.jpg';

        $password20 = new PasswordSolution();
        $password20->name = 'Axel F. Cronstedt';
        $password20->element = 'Niquel';
        $password20->discovery_year = '1751';
        $password20->text = 'El barón Axel Fredrik Cronstedt (23 de diciembre de 1722-19 de agosto de 1765) fue un mineralogista y químico sueco que descubrió el níquel en 1751 como experto en minería de la Dirección de Minas.';
        $password20->image = 'Axel-F-Cronstedt.jpg';

        $password21 = new PasswordSolution();
        $password21->name = 'Carl A. von Welsbach';
        $password21->element = 'Neodimio';
        $password21->discovery_year = '1885';
        $password21->text = 'Carl Auer Freiherr von Welsbach (1 de septiembre de 1858 - 4 de agosto de 1929) fue un científico e inventor austríaco, que tuvo talento para descubrir el neodimio en el año 1885 ademas de hacer avances tecnológicos y también para convertirlos en productos con éxito comercial.';
        $password21->image = 'Carl-A-von-Welsbach.jpg';

        $password22 = new PasswordSolution();
        $password22->name = 'Carl G. Mosander';
        $password22->element = 'Lantano';
        $password22->discovery_year = '1839';
        $password22->text = 'Carl Gustaf Mosander, a veces escrito, Carl Gustav Mosander, (Kalmar, 10 de septiembre de 1797 - Lovön, Condado de Estocolmo, 15 de octubre de 1858) fue un químico sueco. Descubrió los elementos químicos lantano en 1839';
        $password22->image = 'Carl-G-Mosander.jpg';

        $password23 = new PasswordSolution();
        $password23->name = 'Carlo Perrier';
        $password23->element = 'Tecnecio';
        $password23->discovery_year = '1937';
        $password23->text = 'Carlo Perrier (Turín, Italia, 7 de julio de 1886 - Génova, 22 de mayo de 1948) fue un químico y mineralogista de origen italiano, que descubrió el tecnecio en 1937 junto a su compatriota Emilio Gino Segré de la Universidad de Palermo.';
        $password23->image = 'Carlo-Perrier.jpg';

        $password24 = new PasswordSolution();
        $password24->name = 'Carl T. Setterberg';
        $password24->element = 'Cesio';
        $password24->discovery_year = '1860';
        $password24->text = 'Carl Theodor Setterberg (Järpås, Skaraborg,1​ Suecia, 1853 - ?) fue un químico industrial de origen sueco, que aisló el cesio por primera vez en 1860 mientras era alumno de doctorado de Friedrich Kekulé y Robert Bunsen.';
        $password24->image = 'Carl-T-Setterberg.jpg';

        $password25 = new PasswordSolution();
        $password25->name = 'Charles D. Coryell';
        $password25->element = 'Prometio';
        $password25->discovery_year = '1938';
        $password25->text = 'Charles DuBois Coryell (Los Ángeles, Estados Unidos, 21 de febrero de 1912 - Lexington (Massachusetts), Estados Unidos, 7 de enero de 1971)1​2​ fue un químico estadounidense que participó en el descubrimiento del elemento de número atómico 61: el prometio en 1938.';
        $password25->image = 'Charles-D-Coryell.jpg';

        $password26 = new PasswordSolution();
        $password26->name = 'Charles Hatchett';
        $password26->element = 'Bacilluscereus';
        $password26->discovery_year = '1809';
        $password26->text = 'Charles Hatchett (Londres, 2 de enero de 1765 - idem, 10 de marzo de 18471​) fue un químico inglés que descubrió el elemento niobio.2​';
        $password26->image = 'Charles-Hatchett.jpg';

        $password27 = new PasswordSolution();
        $password27->name = 'Claude A. Lamy';
        $password27->element = 'Talio';
        $password27->discovery_year = '1862';
        $password27->text = 'Claude Auguste Lamy (15 de junio de 1820 – 20 de marzo de 1878) fue un químico francés (Universidad de Lille, Limoges, París), descubridor del elemento talio independientemente de William Crookes en 1862.';
        $password27->image = 'Claude-A-Lamy.jpg';

        $password28 = new PasswordSolution();
        $password28->name = 'Claude F. Geoffroy';
        $password28->element = 'bismotu';
        $password28->discovery_year = '1753';
        $password28->text = 'Claude François Geoffroy (1729-1753) fue un químico francés. Descubrió el elemento químico bismuto en 1753, al demostrar que era un elemento diferente del plomo.';
        $password28->image = 'Claude-F-Geoffroy.jpg';

        $password29 = new PasswordSolution();
        $password29->name = 'Dale R. Corson';
        $password29->element = 'Astato';
        $password29->discovery_year = '1977';
        $password29->text = 'Dale Raymond Corson o Dale R. Corson (Pittsburg, Kansas, 5 de abril de 1914 - Ithaca, Nueva York, 31 de marzo de 2012) fue un físico estadounidense que ejerció el cargo de octavo presidente de la Universidad Cornell entre 1969 y 1977 y fue co-descubridor del astato.';
        $password29->image = 'Dale-R-Corson.jpg';

        $password30 = new PasswordSolution();
        $password30->name = 'Emilio Segré';
        $password30->element = 'Tecnecio';
        $password30->discovery_year = '1937';
        $password30->text = 'Emilio Gino Segrè (Tívoli, Lacio, Italia, 1 de febrero de 1905-Lafayette, California, Estados Unidos, 22 de abril de 1989) fue un físico ítalo-estadounidense que, juntamente con Owen Chamberlain, ganó en 1959 el Premio Nobel de Física, por el descubrimiento del antiprotón, ademas descubrio el tecnecio en 1937.';
        $password30->image = 'Emilio-Segré.jpg';

        $password31 = new PasswordSolution();
        $password31->name = 'Eugene A. Demarcay';
        $password31->element = 'Europio';
        $password31->discovery_year = '1890';
        $password31->text = 'Eugène-Anatole Demarçay (París, 1 de enero de 1852 - París, 5 de marzo de 1903) fue un químico francés, la mayor parte de su vida trabajó en un laboratorio propio e independiente donde descubrio el europio en 1890​ Durante un experimento, una explosión le hizo perder la vista en uno de sus ojos.';
        $password31->image = 'Eugene-A-Demarcay.jpg';

        $password32 = new PasswordSolution();
        $password32->name = 'Ferdinand Reich';
        $password32->element = 'Indio';
        $password32->discovery_year = '1863';
        $password32->text = 'Ferdinand Reich (19 de febrero de 1799 - 27 de abril de 1882) fue un químico alemán que codescubrió el elemento químico indio en 1863 junto con Hieronymous Theodor Richter.';
        $password32->image = 'Ferdinand-Reich.jpg';

        $password33 = new PasswordSolution();
        $password33->name = 'Franz J. Müller von Reichenstein';
        $password33->element = 'Telurio';
        $password33->discovery_year = '1782';
        $password33->text = 'Franz-Joseph Müller, Freiherr von Reichenstein (en húngaro, Müller F. József) fue un geólogo y químico húngaro,1​ que descubrió el telurio en 1782.';
        $password33->image = 'Franz-J-Müller-von-Reichenstein.jpg';

        $password34 = new PasswordSolution();
        $password34->name = 'Friedrich E. Dorn';
        $password34->element = 'Radon';
        $password34->discovery_year = '1900';
        $password34->text = 'Friedrich Ernst Dorn (n. Guttstadt (Dobre Miasto), 27 de julio de 1848 - f. Halle, 16 de diciembre de 1916) fue un físico alemán que descubrió que una sustancia radiactiva, más tarde llamada radón, era emitida por el radio.';
        $password34->image = 'Friedrich-E-Dorn.jpg';

        $password35 = new PasswordSolution();
        $password35->name = 'Friedrich Stromeyer';
        $password35->element = 'Cadmio';
        $password35->discovery_year = '1817';
        $password35->text = 'Friedrich Stromeyer (1776 - 1835) fue un químico alemán. Stromeyer recibió su licenciatura de la Universidad de Gottingen en 1800. Formó parte del claustro de la universidad y también fue inspector de boticarios.';
        $password35->image = 'Friedrich-Stromeyer.jpg';

        $password36 = new PasswordSolution();
        $password36->name = 'Friedrich Wöhler';
        $password36->element = 'Urea';
        $password36->discovery_year = '1828';
        $password36->text = 'Friedrich Wöhler (Eschersheim, Fráncfort del Meno, 31 de julio de 1800-Gotinga, 23 de septiembre de 1882) fue un pedagogo y químico alemán, más conocido por su síntesis de la urea, aunque también por ser el primero en aislar varios elementos químicos, como el berilio o el aluminio metálico.';
        $password36->image = 'Friedrich-Wöhler.jpg';

        $password37 = new PasswordSolution();
        $password37->name = 'Georg Brandt';
        $password37->element = 'Cobalto';
        $password37->discovery_year = '1735';
        $password37->text = 'Georg Brandt (Riddarhyttan, Västmanland; 21 de julio1 de 1694-Estocolmo, 29 de abril de 1768) fue un químico y mineralogista sueco que descubrió el cobalto (h. 1735). Fue la primera persona en descubrir un metal desconocido en la antigüedad.';
        $password37->image = 'Georg-Brandt.jpg';

        $password38 = new PasswordSolution();
        $password38->name = 'George C. de Hevesy';
        $password38->element = 'Hafnio';
        $password38->discovery_year = '1923';
        $password38->text = 'George Hevesy (en húngaro: Hevesy György) (Budapest, 1 de agosto de 1885 - Friburgo, 5 de julio de 1966) fue un químico-físico sueco de origen húngaro​ galardonado con el Premio Nobel de Química del año 1943. En sus investigaciones, desarrolló un método para estudiar organismos vivos mediante trazas radioactivas.';
        $password38->image = 'George-C-de-Hevesy.jpg';

        $password39 = new PasswordSolution();
        $password39->name = 'Georges Urbain';
        $password39->element = 'Lutecio';
        $password39->discovery_year = '1907';
        $password39->text = 'Georges Urbain (París, 12 de abril de 1872 – 5 de noviembre de 1938) fue un químico francés, profesor de la Universidad de París. En 1907 separó el iterbio obtenido por Jean Charles Galissard y obtuvo el el lutecio, descubriendo así este nuevo elemento químico.';
        $password39->image = 'Georges-Urbain.jpg';

        $password40 = new PasswordSolution();
        $password40->name = 'Hans C. Ørsted';
        $password40->element = 'Aluminio';
        $password40->discovery_year = '1825';
        $password40->text = 'Hans Christian Ørsted (pronunciado en español Oersted; Rudkøbing, Langeland, 14 de agosto de 1777-Copenhague, Capital (Hovedstaden), 9 de marzo de 1851) fue un físico y químico danés, conocido por haber descubierto de forma experimental la relación física entre la electricidad y el magnetismo, y por aislar el aluminio.';
        $password40->image = 'Hans-C-Ørsted.jpg';

        $password41 = new PasswordSolution();
        $password41->name = 'Harold G. Richter';
        $password41->element = 'Prometio';
        $password41->discovery_year = '1945';
        $password41->text = 'Harold G. Richter (5 de marzo de 1925 - 19 de julio de 2001​) fue un químico estadounidense, que colaboró en el descubrimiento del elemento químico de número atómico 61, prometio, perteneciente a los lantánidos, junto a Jacob A. Marinsky, Charles D. Coryell y Lawrence E. Glendenin,​ en 1945, en los Laboratorios Clinton, ahora llamados Oak Ridge National Laboratory, Tennessee, dentro del proyecto Manhattan.';
        $password41->image = 'Harold-G-Richter.jpg';

        $password42 = new PasswordSolution();
        $password42->name = 'Hieronymus T. Richter';
        $password42->element = 'Indio';
        $password42->discovery_year = '1863';
        $password42->text = 'Hieronymus Theodor Richter (Dresde, 21 de noviembre de 1824 - Freiberg 25 de septiembre de 1898), fue un químico alemán que durante su trabajo en la Universidad De Freiberg De Minería y Tecnología codescubrió el elemento químico indio en 1863 junto con Ferdinand Reich.';
        $password42->image = 'Hieronymus-T-Richter.jpg';

        $password43 = new PasswordSolution();
        $password43->name = 'Ignatius G. Kaim';
        $password43->element = 'Manganeso';
        $password43->discovery_year = '1774';
        $password43->text = 'Ignatius Gottfried Kaim (1746 - 1778) fue un químico y mineralogista austríaco, descubridor del manganeso tras una serie de experimentos realizados en Viena, en 1770.';
        $password43->image = 'Ignatius-G-Kaim.jpg';

        $password44 = new PasswordSolution();
        $password44->name = 'Jacob A. Marinsky';
        $password44->element = 'Prometio';
        $password44->discovery_year = '1945';
        $password44->text = 'Jacob Akiba Marinsky (1918 - 1 de septiembre de 2005) fue un químico estadounidense que fue el co-descubridor del elemento prometio.';
        $password44->image = 'Jacob-A-Marinsky.jpg';

        $password45 = new PasswordSolution();
        $password45->name = 'Jaques L. Soret';
        $password45->element = 'Holmio';
        $password45->discovery_year = '1878';
        $password45->text = 'Jacques-Louis Soret (30 de junio de 1827 – 13 de mayo de 1890) fue un químico suizo quien en 1878, junto con Marc Delafontaine, observaron por primera vez el holmio mediante espectroscopia.';
        $password45->image = 'Jaques-L-Soret.jpg';

        $password46 = new PasswordSolution();
        $password46->name = 'Jean C. Galissard de Marignac';
        $password46->element = 'Gadolinio';
        $password46->discovery_year = '1880';
        $password46->text = 'Jean Charles Galissard de Marignac (Ginebra, 24 de abril de 1817 - Ginebra, 15 de abril de 1894) fue un químico suizo,el descubrio el iterbio en 1878, y al codescubrimiento del gadolinio en 1880.';
        $password46->image = 'Jean-C-Galissard-de-Marignac.jpg';

        $password47 = new PasswordSolution();
        $password47->name = 'Jedrzej Sniadecki';
        $password47->element = 'Rutenio';
        $password47->discovery_year = '1844';
        $password47->text = 'Śniadecki puede haber sido el primer descubridor del elemento rutenio en 1807,​ treinta y siete años antes que Karl Klaus.';
        $password47->image = 'Jedrzej-Sniadecki.jpg';

        $password48 = new PasswordSolution();
        $password48->name = 'Johann Arfvedson';
        $password48->element = 'Litio';
        $password48->discovery_year = '1817';
        $password48->text = 'Johan August Arfwedson (Skagersholms Bruk, 12 de enero de 1792 - Hedensö, 28 de octubre de 1841) fue un químico sueco y descubridor del litio en el año 1817.';
        $password48->image = 'Johann-Arfvedson.jpg';

        $password49 = new PasswordSolution();
        $password49->name = 'Johann C.H. Roloff';
        $password49->element = 'Cadmio';
        $password49->discovery_year = '1817';
        $password49->text = 'Johann Christoph Heinrich Roloff, (1 de mayo de 1783, Schönebeck - 16 de febrero de 1825, Magdeburgo),1 normalmente abreviado como J. C. H. Roloff (o Rolow), fue un asesor médico e inspector farmacéutico alemán, a quien se considera uno de los codescubridores del cadmio en 1817, junto a Friedrich Stromeyer y Karl Samuel Leberecht Hermann.';
        $password49->image = 'Johann-C.H-Roloff.jpg';

        $password50 = new PasswordSolution();
        $password50->name = 'Johann G. Gahn';
        $password50->element = 'Manganeso';
        $password50->discovery_year = '1774';
        $password50->text = 'Johan Gottlieb Gahn (1745 – 1818) fue un químico, y metalúrgico sueco que descubrió el elemento manganeso en 1774.';
        $password50->image = 'Johann-G-Gahn.jpg';

        $password51 = new PasswordSolution();
        $password51->name = 'John W. Strutt';
        $password51->element = 'Argón';
        $password51->discovery_year = '1894';
        $password51->text = 'John William Strutt, tercer barón de Rayleigh, también conocido como lord Rayleigh, fue un físico y catedrático universitario británico galardonado con el Premio Nobel de Física en 1904. Estableció la existencia de los gases nobles, descubriendo el argón e investigando las propiedades físicas de los gases.';
        $password51->image = 'John-W-Strutt.jpg';

        $password52 = new PasswordSolution();
        $password52->name = 'Jöns J. Berzelius';
        $password52->element = 'Cerio';
        $password52->discovery_year = '1803';
        $password52->text = 'Jöns Jacob Berzelius (Östergötland, Suecia, 20 de agosto de 1779 - Estocolmo, 17 de agosto de 1848) descubrió el torio, el cerio y el selenio y fue el primero en aislar el circonio, el silicio y el titanio. También perfeccionó la tabla de los pesos atómicos de los elementos publicada por Dalton, cuyos errores corrigió.';
        $password52->image = 'Jöns-J-Berzelius.jpg';

        $password53 = new PasswordSolution();
        $password53->name = 'Karl S. Leberecht';
        $password53->element = 'Cadmio';
        $password53->discovery_year = '1817';
        $password53->text = 'Karl Samuel Leberecht Hermann (Königerode, 20 de enero de 1765 - Schönebeck (Elbe), 1 de septiembre de 1846) fue un químico alemán que descubrió el cadmio en 1817 independientemente de otros descubridores.';
        $password53->image = 'Karl-S-Leberecht.jpg';

        $password54 = new PasswordSolution();
        $password54->name = 'Kasimir Fajans';
        $password54->element = 'Protactinio';
        $password54->discovery_year = '1913';
        $password54->text = 'Kasimir Fajans (Varsovia, 27 de mayo de 1887 - Ann Arbor, Míchigan, 18 de mayo de 1975). Elaboró unas reglas (ver Reglas de Fajans) referentes al enlace químico que llevan su nombre, además de descubrir un nuevo elemento atómico, el Protactinio junto a su estudiante, Oswald Helmuth Göhring.';
        $password54->image = 'Kasimir-Fajans.jpg';

        $password55 = new PasswordSolution();
        $password55->name = 'Kenneth R. Mackenzie';
        $password55->element = 'Astato';
        $password55->discovery_year = '1940';
        $password55->text = 'Kenneth Ross Mackenzie (15 de junio de 1912 - 4 de julio de 2002),1 fue un físico nuclear estadounidense que, junto con Dale R. Corson y Emilio Segrè, sintetizó el elemento astato, en 1940.';
        $password55->image = 'Kenneth-R-Mackenzie.jpg';

        $password56 = new PasswordSolution();
        $password56->name = 'Lars F. Nilson';
        $password56->element = 'Escandio';
        $password56->discovery_year = '1879';
        $password56->text = 'Lars Fredrik Nilson (Östergötland, Suecia, 27 de mayo de 1840 - Estocolmo, 14 de mayo de 1899) fue un químico sueco que descubrió el escandio en 1879.';
        $password56->image = 'Lars-F-Nilson.jpg';

        $password57 = new PasswordSolution();
        $password57->name = 'Lawrence E. Glendenin';
        $password57->element = 'Prometio';
        $password57->discovery_year = '1945';
        $password57->text = 'Lawrence Elgin Glendenin (Bay City, 8 de noviembre de 1918 - Crystal Lake, 22 de noviembre de 2008) fue un químico estadounidense. Fue uno de los descubridores del elemento prometio junto a Jacob A. Marinsky, Charles D. Coryell y Harold G. Richter.';
        $password57->image = 'Lawrence-E-Glendenin.jpg';

        $password58 = new PasswordSolution();
        $password58->name = 'Louis N. Vauquelin';
        $password58->element = 'Cromo';
        $password58->discovery_year = '1797';
        $password58->text = 'Louis Nicolas Vauquelin (16 de mayo de 1763 - 14 de noviembre de 1829), en las sustancias que analizó solo detectó dos elementos nuevos, el berilio en 1798 y el cromo en 1797 ';
        $password58->image = 'Louis-N-Vauquelin.jpg';

        $password59 = new PasswordSolution();
        $password59->name = 'Marc Delafontaine';
        $password59->element = 'Holmio';
        $password59->discovery_year = '1878';
        $password59->text = 'Marc Delafontaine (1837 - 1911) fue un químico suizo que en 1878, junto con Jacques-Louis Soret, observaron por primera vez el holmio mediante espectroscopia.';
        $password59->image = 'Marc-Delafontaine.jpg';

        $password60 = new PasswordSolution();
        $password60->name = 'Marguerite C. Perey';
        $password60->element = 'Francio';
        $password60->discovery_year = '1939';
        $password60->text = 'Marguerite Catherine Perey (19 de octubre de 1909 – 13 de mayo de 1975) fue una física francesa. En 1939, Perey descubrió el elemento francio al purificar muestras de lantano que contenían actinio. En 1962, ella fue la primera mujer en ser elegida para la Academia de Ciencias de Francia.';
        $password60->image = 'Marguerite-C-Perey.jpg';

        $password61 = new PasswordSolution();
        $password61->name = 'Maria Sklodowska';
        $password61->element = 'Radio, Polonio';
        $password61->discovery_year = '1898';
        $password61->text = 'Marguerite Catherine Perey (19 de octubre de 1909 – 13 de mayo de 1975) fue una física francesa. En 1939, Perey descubrió el elemento francio al purificar muestras de lantano que contenían actinio en 1898. ';
        $password61->image = 'Maria-Sklodowska.jpg';

        $password62 = new PasswordSolution();
        $password62->name = 'Masataka Ogawa';
        $password62->element = 'Renio';
        $password62->discovery_year = '1925';
        $password62->text = 'Masataka Ogawa (小川 正孝? 21 de febrero de 1865 - 1 de julio de 19301​) fue un químico japonés conocido por el descubrimiento del renio.';
        $password62->image = 'Masataka-Ogawa.jpg';

        $password63 = new PasswordSolution();
        $password63->name = 'Morris Travers';
        $password63->element = 'Neón, Kriptón, Xenón';
        $password63->discovery_year = '1898';
        $password63->text = 'Morris William Travers o simplemente Morris Travers (Kensington, Londres, Inglaterra, Reino Unido, 24 de enero de 1872 - Stroud, Gloucestershire, Inglaterra, Reino Unido, 25 de agosto de 1961) fue un químico británico, conocido por ser descubridor del xenón en 1898';
        $password63->image = 'Morris-Travers.jpg';

        $password64 = new PasswordSolution();
        $password64->name = 'Norman Lockyer';
        $password64->element = 'Helio';
        $password64->discovery_year = '1868';
        $password64->text = 'Joseph Norman Lockyer (Rugby, Warwickshire, Reino Unido, 17 de mayo de 1836-Salcombe Regis, Devon, Reino Unido, 16 de agosto de 1920) fue un científico y astrónomo británico, que descubrió el helio al mismo tiempo que Pierre Janssen en 1868.';
        $password64->image = 'Norman-Lockyer.jpg';

        $password65 = new PasswordSolution();
        $password65->name = 'Oswald H. Göhring';
        $password65->element = 'Protactinio';
        $password65->discovery_year = '1913';
        $password65->text = 'Oswald Helmuth Göhring (1889 - ?) fue un químico alemán, co-descubridor del elemento químico protactinio en 1913, junto a su maestro, Kasimir Fajans.';
        $password65->image = 'Oswald-H-Göhring.jpg';

        $password66 = new PasswordSolution();
        $password66->name = 'Paul E. Leqoc de Boisbaudran';
        $password66->element = 'Galio';
        $password66->discovery_year = '1875';
        $password66->text = 'Paul Émile (François) Lecoq de Boisbaudran (Cognac, 18 de abril de 1838 - París, 28 de mayo de 1912) fue un químico francés. En 1858 se incorporó a la empresa vitivinícola familiar, pero un año más tarde fue a trabajar como químico y descubrio el galio en 1875.';
        $password66->image = 'Paul-E-Leqoc-de-Boisbaudran.jpg';

        $password67 = new PasswordSolution();
        $password67->name = 'Peter J. Hjelm';
        $password67->element = 'Molibdeno';
        $password67->discovery_year = '1781';
        $password67->text = 'Peter Jacob Hjelm (Sunnerbo Härad, Småland, Suecia, 2 de octubre de 1746 - Estocolmo, Suecia, 7 de octubre de 1813) fue un químico industrial, mineralogista y metalúrgico sueco1​ y la primera persona en aislar el elemento químico molibdeno en 1781, cuatro años después de su descubrimiento.';
        $password67->image = 'Peter-J-Hjelm.jpg';

        $password68 = new PasswordSolution();
        $password68->name = 'Pierre Curie';
        $password68->element = 'Radio, Polonio';
        $password68->discovery_year = '1898';
        $password68->text = 'Peter Jacob Hjelm (Sunnerbo Härad, Småland, Suecia, 2 de octubre de 1746 - Estocolmo, Suecia, 7 de octubre de 1813) fue un químico industrial, mineralogista y metalúrgico sueco1​ y la primera persona en aislar el elemento químico molibdeno en 1781.';
        $password68->image = 'Pierre-Curie.jpg';

        $password69 = new PasswordSolution();
        $password69->name = 'Pierre Janssen';
        $password69->element = 'Helio';
        $password69->discovery_year = '1868';
        $password69->text = 'Pierre Jules César Janssen (22 de febrero de 1824 - 23 de diciembre de 1907) fue un astrónomo francés, descubridor del elemento químico helio, que en 1868.';
        $password69->image = 'Pierre-Janssen.jpg';

        $password70 = new PasswordSolution();
        $password70->name = 'Smithson Tennant';
        $password70->element = 'Osmio';
        $password70->discovery_year = '1803';
        $password70->text = 'Smithson Tennant (30 de noviembre de 1761 - 22 de febrero de 1815) fue un químico inglés. Tennant es más conocido por su descubrimiento de los elementos osmio, que encontró en los residuos de la solución de los minerales de platino en 1803';
        $password70->image = 'Smithson-Tennant.jpg';

        $password71 = new PasswordSolution();
        $password71->name = 'Wilhelm Hisinger';
        $password71->element = 'Cerio';
        $password71->discovery_year = '1803';
        $password71->text = 'Wilhelm Hisinger (Västmanland, 23 de diciembre de 1766 - Skinnskatteberg, 28 de junio de 1852) fue un naturalista, mineralogista, físico, químico, geólogo sueco que en 1803 descubrio el Cerio una determinada sustancia siempre se depositaba en el mismo electrodo.';
        $password71->image = 'Wilhelm-Hisinger.jpg';

        $password72 = new PasswordSolution();
        $password72->name = 'William Crookes';
        $password72->element = 'Talio';
        $password72->discovery_year = '1861';
        $password72->text = 'En 1803, trabajando en laboratorios independientes, Martin Heinrich Klaproth por un lado, y Berzelius y Hisinger por otro, descubrieron el elemento cerio';
        $password72->image = 'William-Crookes.jpg';

        $password73 = new PasswordSolution();
        $password73->name = 'William Cruickshank';
        $password73->element = 'Estroncio';
        $password73->discovery_year = '1790';
        $password73->text = 'William Cruickshank (fallecido en 1810 o 1811) fue un cirujano militar escocés, químico y profesor de química en la Real Academia Militar de Woolwich, a su vez descubrio el estroncio en 1790.';
        $password73->image = 'William-Cruickshank.jpg';

        $password74 = new PasswordSolution();
        $password74->name = 'William Gregor';
        $password74->element = 'Titanio';
        $password74->discovery_year = '1791';
        $password74->text = 'William Gregor (* 25 de diciembre de 1761-11 de junio de 1817) fue un clérigo inglés y mineralólogo que descubrió el metal elemental del titanio en 1791.';
        $password74->image = 'William-Gregor.jpg';

        $password75 = new PasswordSolution();
        $password75->name = 'William H. Wollaston';
        $password75->element = 'Rodio';
        $password75->discovery_year = '1803';
        $password75->text = 'William Hyde Wollaston fue un físico y químico británico (East Dereham, 6 de agosto de 1776 – Londres, 22 de diciembre de 1828). Perfeccionó la pila inventada por el italiano Alessandro Volta,1​ y descubrió los metales rodio en 1803';
        $password75->image = 'William-H-Wollaston.jpg';

        $password76 = new PasswordSolution();
        $password76->name = 'William Ramsay';
        $password76->element = 'Kriptón';
        $password76->discovery_year = '1898';
        $password76->text = 'William Ramsay (2 de octubre de 1852, Glasgow - 23 de julio de 1916, High Wycombe, Buckinghamshire) fue un químico británico que recibió el Premio Nobel de Química en 1904. Después de que él y John William Strutt descubriesen el radón, Ramsay investigó otros gases atmosféricos. Descubrió varios gases. Como por ejemplo el criptón en 1898 ';
        $password76->image = 'William-Ramsay.jpg';

        $password1->save();
        $password2->save();
        $password3->save();
        $password4->save();
        $password5->save();
        $password6->save();
        $password7->save();
        $password8->save();
        $password9->save();
        $password10->save();
        $password11->save();
        $password12->save();
        $password13->save();
        $password14->save();
        $password15->save();
        $password16->save();
        $password17->save();
        $password18->save();
        $password19->save();
        $password20->save();
        $password21->save();
        $password22->save();
        $password23->save();
        $password24->save();
        $password25->save();
        $password26->save();
        $password27->save();
        $password28->save();
        $password29->save();
        $password30->save();
        $password31->save();
        $password32->save();
        $password33->save();
        $password34->save();
        $password35->save();
        $password36->save();
        $password37->save();
        $password38->save();
        $password39->save();
        $password40->save();
        $password41->save();
        $password42->save();
        $password43->save();
        $password44->save();
        $password45->save();
        $password46->save();
        $password47->save();
        $password48->save();
        $password49->save();
        $password50->save();
        $password51->save();
        $password52->save();
        $password53->save();
        $password54->save();
        $password55->save();
        $password56->save();
        $password57->save();
        $password58->save();
        $password59->save();
        $password50->save();
        $password51->save();
        $password52->save();
        $password53->save();
        $password54->save();
        $password55->save();
        $password56->save();
        $password57->save();
        $password58->save();
        $password59->save();
        $password60->save();
        $password61->save();
        $password62->save();
        $password63->save();
        $password64->save();
        $password65->save();
        $password66->save();
        $password67->save();
        $password68->save();
        $password69->save();
        $password70->save();
        $password71->save();
        $password72->save();
        $password73->save();
        $password74->save();
        $password75->save();
        $password76->save();
    }
}
