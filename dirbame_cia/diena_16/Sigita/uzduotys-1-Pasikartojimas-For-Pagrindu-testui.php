<!-- //  -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-
// 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
// 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
// 1.4 Atspausdinti kas antra data
// 1.4 Atspausdinti kas trecia data
// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)


<?php var $array = [1981, 1980, 1975, 1995, 1999];
// <!-- // 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla -->
for ($i=0; $i < count($array); $i++) {
echo $array[$i];
}

while ($array != -1){
  $i++;
  echo $array[$i];
}

// 1.4 Atspausdinti kas antra data
for ($i=0; $i < count($array); $i++) {
  if($i % 2 == 1);
}
// 1.4 Atspausdinti kas trecia data
for ($i=0; $i < count($array); $i++) {
  if($i % 3 == 2);
}
// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)
for ($i=2; $i <= count($array); $i++) {
echo $array[$i];
}
// 2) sukurti matrica:
// Tomas, 1981, Buhalteris
// Ona 1980 Programuotoja
// Petras, 1975, Direktorius
// 2.1) atspausdinti su FOR ciklu
// 2.2) atspausdinti su FOR FOR ciklu
// 2.3) atspausdinti su FOREACH -->
$darbuotojai [$darbuotojas1, $darbuotojas2, $darbuotojas3];
$darbuotojas1 ['Tomas', 1981, 'buhalteris'];
$darbuotojas2 ['Ona', 1980, 'Programuotoja'];
$darbuotojas3 ['Petras', 1975, 'Direktorius'];
for ($i=0; $i < count($darbuotojai) ; $i++) {
  print_r($darbuotojai[$i])
}

?>
$zmogus = ["vardas" => "Tomas",
            "pavarde" => "Karlos",
            "AK" => 5000451,
            "Miestas" => "Kaunas",
            "tautybe" => "lietuvis"];
            print_r($zmogus);
foreach ($zmogus as $stalciausTurinys) {
              if ($stalciausTurinys == 5000451){
                break;
              }
              echo "Stalciaus viduje:" . $stalciausTurinys;
              echo "<br/>";

            }
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
console.log(names.indexOf("Rico"));
//indexOf(x) ==> elementas kurio ieskom;
//indexOf(x, i) ==> elementas kurio ieskom;
//i ==> indeksas nuo kurio ieskom;
var vardas = names.indexOf("Rico");
if (vardas != 0) {
  console.log("vardas yra", names[vardas]);
  console.log("pozicija", vardas);
}

function surastiVisusRico (arr, vardo){
  var stalcius = [];
  var rastasVardas = arr.indexOf(vardo);
  while (rastasVardas != -1){
    stalcius.push(rastasVardas);
    rastasVardas = arr.indexOf(name, rastasVardas + 1);
  }
  return stalcius;
  }
  var rezultatas = surastiVisusRico (names, "Rico");
  console.log(rezultatas);
