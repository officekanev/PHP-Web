<form action="">
    <div>
        Categories:<input type="text" name="categories"/>
    </div>
    <div>
        Tags:<input type="text"  name="tags"/>
    </div>
    <div>
        Months:<input type="text"  name="months"/>
    </div>
    <div>
        <input type="submit" value="Generate">
    </div>
</form>

<?php
if (isValidRequest($_GET, ["categories", "tags", "months"], $res)) {
    $output = "";
    foreach ($res as $key => $val) {
        $key = ucfirst($key);
        $output .= "<h2>{$key}</h2><ul>";
                    //implode - Свързва елементи на масив с низ
        $output .= implode('', array_map(function ($item) {//array_map() returns an array containing all the elements of array1
            return "<li>{$item}</li>";
        }, explode(", ", $val)));//explode() - Разделя низ на поднизове
        $output .= "</ul>";
    }
    echo $output;
}
function isValidRequest($request, $inputFields, &$output)
{
    if (is_array($request)) {
        $validRequest = true;
        foreach ($inputFields as $field) {
            if (isset($request[$field]) && !empty(trim($request[$field]))) {
                $output[$field] = trim($request[$field]);
                continue;
            }
            $validRequest = false;
            break;
        }
    }
    return isset($validRequest) && $validRequest === true;
}

//===================================================================
//if (isset($_GET["categories"]) && !empty(trim($_GET["categories"])
//    && $_GET["tags"]) && !empty(trim($_GET["tags"])
//    && $_GET["months"]) && !empty(trim($_GET["months"]))) {
//
//    $categor = trim($_GET["categories"]);
//    //$categor = trim('Knitting, Cycling, Swimming, Dancing');
//    $tag = trim($_GET["tags"]);
//    //$tag = trim('person, free time, love, peace, protest');
//    $mont = trim($_GET["months"]);
//    //$mont = trim('April, May, June, July');
//
//    preg_match_all("/[a-zA-Z]+/", $categor, $categorie);
//     $categories =  $categorie[0];
//    preg_match_all("/[a-zA-Z]+/", $tag, $tagins);
//    $tags =  $tagins[0];
//    preg_match_all("/[a-zA-Z]+/", $mont, $month);
//    $months =  $month[0];
//
//    $navigationName = 'Categories';
//    echo buildSections($categories, $navigationName);
//    $navigationName = 'Tags';
//    echo buildSections($tags, $navigationName);
//    $navigationName = 'Months';
//    echo buildSections($months, $navigationName);
//
//}
//
//function buildSections($item, $categoriName){
//    $nav = " <h2>{$categoriName}</h2>";
//    $nav .= " <ul>";
//    foreach ($item as $elemenetns){
//        $nav .= "  <li>{$elemenetns}</li>";
//    }
//    $nav .= " </ul>\n";
//    return $nav;
//}