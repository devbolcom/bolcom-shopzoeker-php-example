<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>PHP sample bol.com API</title>
        <link rel="stylesheet" type="text/css" href="css/multiselect.css">

        <link rel="stylesheet" href="css/base/jquery.ui.all.css">

        <script type="text/javascript" src="js/jquery-1.4.4.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.multiselect.js"></script>

        <script>
            // Clear textfield searchbox onclick
            function clearText(thefield) {
                if (thefield.defaultValue == thefield.value)
                    thefield.value = ""
            }

            // Dropdownbox with possible categories
            $(function() {
                $("select").multiselect({
                    header : "Zoek binnen:",
                    minWidth : 160,
                    height : "auto",
                    selectedText : false,
                    multiple : false,
                    selectedList : 1
                });
            });

        </script>

        <style type="text/css">
            body {
                font-size: 11px;
                font-family: arial;
                background: #ccc;
            }

            .categorylist {
                width: 788px;
                padding: 10px;
                float: left;
                padding: 0px 10px;
                background: #fff;
            }

            .categorylist ul {
                list-style: none;
                margin: 10px 0px 0px 0px;
                padding: 0px;
            }

            .categorylist li {
                float: left;
                height: 30px;
            }

            .categorylist a {
                margin: 0px 10px 10px 0px;
                border: 1px solid #ccc;
                padding: 5px;
                height: 20px;
                white-space: nowrap;
            }

            .categorylist a:hover {
                background: #3366CC;
                color: #fff;
                border: 1px solid #000;
            }

            ul.productlist {
                list-style: none outside none;
                margin: 0px;
                padding: 0px;
                width: 788px;
                float: left;
                padding: 0px 10px;
                background: #fff;
                margin: 0 auto;
            }

            ul.productlist li {
                float: left;
                margin: 10px 0px 0px 0px;
                display: block;
                padding: 0px 0px 10px 0px;
            }

            .result {

                width: 808px;
                margin: 0 auto;
                background: #fff;
                height: 800px;
                min-height: 800px;
                height: auto; !important
            }

            select {
                z-index: 100;
                position: absolute;
                top: 20px;
            }

            a:link, a {
                color: #2C5987;
                text-decoration: none;
            }

            a.product {
                background: #FFFFFF;
                display: block;
                text-decoration: none;
                width: 181px;
                height: 350px;
                border: 3px solid #fff;
                padding: 5px;
                position: relative;
            }

            a.product:hover {
                border: 3px solid #ccc;
            }

            .productlist .imageBox {
                height: 215px;
                width: 190px;
                cursor: pointer;
                display: table-cell !important;
                text-align: center;
                vertical-align: middle;
                position: relative;
            }

            span.rank {
                text-align: center;
                width: 14px;
                height: 14px;
                line-height: 14px;
                display: block;
                float: left;
                margin: 0px 2px 0px 0px;
            }

            img {
                border: 0 none;
            }

            span.sectionName {
                font-weight: bold;
            }

            .product span {
                display: block;
            }

            span.productName {
                font-weight: bold;
                font-size: 12px;
            }

            .product .price {
                color: #3333CC;
                font-weight: bold;
                display: block;
                font-size: 20px;
            }

            .product .listprice {
                color: #FF0000;
                display: block;
                font-size: 12px;
                text-decoration: line-through;
            }

            .pricebol {
                background: url("images/price_big.png") no-repeat scroll 50% 0 transparent !important;
                top: 30px;
                height: 68px;
                padding-top: 8px;
                position: absolute;
                right: 0%;
                text-align: center;
                width: 68px;
                z-index: 1;
            }

            .pricebol .listprice {
                color: #FFF;
                font-size: 10px;
                text-decoration: line-through;
                height: 10px;
            }

            .two_digits .newprice {
                font-size: 27px;
                letter-spacing: -1px;
                padding-left: 12px;
            }

            .pricebol .newprice {
                color: #FFFFFF;
                float: left;
                font-family: Georgia;
            }

            .two_digits sup {
                font-size: 15px;
                letter-spacing: -1px;
                margin-left: -15px;
                padding-top: 2px;
            }

            .pricebol sup {
                color: #FFFFFF;
                font-family: Georgia;
            }

            #topbar {
                width: 100%;
                float: left;
                background: #fff;
            }

            #keyword {
                float: left;
                margin: 10px;
                font-weight: bold;
                font-size: 12px;
            }

            #searchwrapper {
                width: 400px; /*follow your image's size*/
                height: 40px;/*follow your image's size*/
                background-image: url("images/searchbox.jpg");
                background-repeat: no-repeat; /*important*/
                padding: 0px;
                margin: 5px;
                position: relative; /*important*/
                float: right;
            }

            #searchwrapper form {
                display: inline;
            }

            .searchbox {
                border: 0px; /*important*/
                background-color: #fff; /*important*/
                width: 174px;
                height: 22px;
                color: #000;
                float: left;
                margin: 8px 10px 0px 10px;
                font-size: 14px;
                line-height: 22px;
                padding: 0px 2px;
                border: 1px solid #efefef;
            }

            .searchbox_submit {
                border: 0px; /*important*/
                background-color: transparent; /*important*/
                position: absolute; /*important*/
                top: 4px;
                left: 365px;
                width: 32px;
                height: 28px;
            }

            .niceselect {
                margin: 9px 40px 0px 0px;
                height: 20px;
                float: right;
                position: absolute;
                top: 0px;
            }

            #logo {
                display: block;
                margin: 20px 0px;
                float: left;
            }

        </style>
    </head>
    <body>
        <?php
        //Requires: extension=php_openssl.dll in php.ini
        // Based on bol.com REST API version 3.0
        // No rights may be derived from this codesample
        // Any questions? Check out the API documentation at http://developers.bol.com

        $server = 'api.bol.com';
        $port = '443';
        $apikey = 'your api key here';
        // Set keyword
        if ($_GET['keyword'] != "") {
            $keyword = $_GET['keyword'];
        } else {
            $keyword = 'potter';
        }
        $keywordtext = '<div id="keyword">Gezocht op: ' . $keyword . '</div>';

        // Clear results
        $output = '';

        function doRequest($httpMethod, $server, $port, $url, $parameters, $content, $sessionId) {

            $server = 'openapi.bol.com';
            $port = '443';

            $today = gmdate('D, d F Y H:i:s \G\M\T');

            if ($httpMethod == 'GET') {
                $contentType = 'application/xml';
            } elseif ($httpMethod == 'POST') {
                $contentType = 'application/x-www-form-urlencoded';
            }

            $headers = $httpMethod . " " . $url . $parameters . " HTTP/1.0\r\n";
            $headers .= "Content-type: " . $contentType . "\r\n";
            $headers .= "Host: " . $server . "\r\n";
            $headers .= "Content-length: " . strlen($content) . "\r\n";
            $headers .= "Connection: close\r\n";
            if (!is_null($sessionId)) {
                $headers .= "X-OpenAPI-Session-ID: " . $sessionId . "\r\n";
            }
            $headers .= "\r\n";

            // Connect using fsockopen (you could also try CURL)
            $socket = fsockopen('ssl://' . $server, $port, $errno, $errstr, 30);
            if (!$socket) {
                echo "$errstr ($errno)<br />\n";
            }
            fputs($socket, $headers);
            fputs($socket, $content);
            $ret = "";

            while (!feof($socket)) {
                $readLine = fgets($socket);
                $ret .= $readLine;
            }
            fclose($socket);

            return $ret;
        }

        if (isset($_GET['id'])) {
            $category_id = $_GET['id'];
        } else {
            $category_id = 0;
        }

        // Parent_id is not being used for any functional purposes in the sample, but could be used for breadcrumbs
        if (!isset($_GET['parent_id'])) {
            $parent_id = $category_id;
        }
        if (isset($_GET['parent_id'])) {
            $parent_id = $_GET['parent_id'];
        }
        if ($_GET['parent_id'] == 0) {
            $parent_id = $category_id;
        }

        // Dropdown categories
        $selectlist = '
  <option value="0" selected="selected">Alle artikelen</option>
  <option value="8299">Boeken</option>
  <option value="3133">Dvd</option>
  <option value="3135">Games</option>
  <option value="3136">Elektronica</option>
  <option value="3134">Computer</option>
  <option value="7934">Speelgoed</option>
  <option value="3132">Muziek</option>';

        // Build the request to the API
        $output .= doRequest('GET', $server, $port, '/catalog/v4/search', '?q=' . urlencode($keyword) . '&apikey=' . $apikey . '&format=xml&offset=0&nrProducts=8&includeattributes=true&dataoutput=categories,refinements,products&ids=' . urlencode($category_id), '', null);

        // Check for the right http status in the API respons
        if (substr_count($output, "200 OK") > 0) {
            // Strip unneeded stuff from the xml respons
            $xml = strstr($output, '<?xml');

            // Simplexml magic
            $phpobject = simplexml_load_string($xml);

            $totalresults = $phpobject->TotalResultSize;
            $summary = 'Aantal resultaten: ' . $totalresults . '<br />';
            $i = 0;
            // First get the categories
            foreach ($phpobject->Categories as $category) {
                $i++;
                $categoryid = $category -> Id;
                $categoryname = $category -> Name;
                $productcount = $category -> ProductCount;
                $totalproduct = $totalproduct + $productcount;

                // Append categories to list to refine on
                $catlist .= '<li><a href="' . htmlentities($_SERVER['PHP_SELF']) . '?keyword=' . $keyword . '&id=' . $categoryid . '&parent_id=' . $parent_id . '"><strong>' . $categoryname . ' (' . $productcount . ')</strong></a></li>';

            }
            if ($i > 0) {

                // Check if there is at least one refinement to show
                $summary .= 'Verfijn op:<br />';
            }
            $number = 0;

            // Get the products
            foreach ($phpobject->Products as $item) {
                
                $id = $item -> Id;
                $section = $item -> Section;
                $thumbnailurl =  preg_replace("/^http:/i", "https:", $item -> Images[1]-> Url);
                $title = $item -> Title;
                $description = $item -> ShortDescription;
                $availabilitycode = $item -> AvailabilityCode;
                $availabilitydescription = $item -> AvailabilityDescription;
                $releasedate = $item -> ReleaseDate;
                $rating = $item -> Rating;

                // The first offer is always a bol.com offer (unless this product is only sold by 2ndhand or plaza partners
                $price = doubleval($item -> OfferData -> Offers[0] -> Price);
                $listprice = doubleval($item -> OfferData -> Offers[0] -> ListPrice);
                $ean = $item -> Ean;
                $externalurl = $item -> Urls -> Main;
                $totalresultsize = $item -> TotalResultSize;
                $number++;
                // $speclist will hold the allowed specs
                $speclist = '';

                // Define array for specs
                $specs = array();
                // These attributes will be put in the specslist later on if they are present in the result. See the documentation for all the available attributes.
                $attributes_allowed = array('FormatDescription', 'FormatCode', 'RecommendedMinAge', 'Type', 'NumberOfPieces', 'Rating', 'BindingCode', 'BindinDescription', 'LanguageCode', 'LanguageDescription', 'Edition', 'PageCount');

                // Get all the children of product (first level) and check if they must be added to the specs.
                foreach ($item->children() as $attribute) {
                    if (in_array($attribute -> getName(), $attributes_allowed)) {

                        // Place them in a multidimensional array. If you want to do any replacements of the english terms, you could do it here
                        $specs[$attribute -> getName()] = $attribute;
                    }
                }

                // Break down the array and place it in $speclist as html output
                foreach ($specs as $k => $v) {
                    if ($specs[$k] != '') {
                        $speclist .= $k . ': ' . $specs[$k] . '<br>';
                    }
                }

                if (@GetImageSize($thumbnailurl)) {
                    // check if image exists!
                } else {
                    // Use a default bol.com image
                    $thumbnailurl = "http://www.bol.com/nl/static/images/main/noimage_124x100default.gif";
                }

                // check if there is a listprice and do some formatting on the numbers
                if ($listprice > 0) {
                    $listpricediv = '<div class="listprice">' . number_format($listprice, 2, '.', '') . '</div>';
                } else {
                    $listpricediv = '<div class="listprice"></div>';
                }
                // Check if there is a rating for the product
                if ($rating != "") {
                    // split rating for image display and text
                    $nicerating = substr($rating, 0, 1);
                    $countrating = strlen($rating);
                    if ($countrating < 2) {
                        // If the rating is a rounded number, add an extra _0 to the end, to get the right rating image
                        $nicerating .= "_0";
                    } else {
                        $nicerating .= '_' . substr($rating, -1);
                    }
                    $altrating = str_replace("_", ".", $nicerating);
                    $ratingspan = '<span class="rating"><img alt="Score ' . $altrating . ' van de 5 sterren" src="http://review.bol.com/7628-nl_nl/' . $nicerating . '/5/rating.gif"></span>';
                } else {
                    $ratingspan = '';
                }

                // Do some formatting on the price in case of rounded numbers, (add a zero)
                $x = explode('.', $price, 2);
                $firstprice = $x[0];
                $secondprice = $x[1];
                if (strlen($secondprice) == 1) { $secondprice .= '0';
                }

                // Build the desired HTML code for each productitem and append it to $results
                $resultlist .= '<li class="more" id="' . $number . '"><a class="product" href="' . $externalurl . '"><span class="imageBox"><img alt="' . $title . '" src="' . $thumbnailurl . '"><div class="pricebol two_digits">' . $listpricediv . '<div class="newprice">' . $firstprice . '';
                $resultlist .= ','; 
                if($secondprice == '') $secondprice = '00'; 
                $resultlist .= '</div><sup>' . $secondprice . '</sup></div></span><span class="productName">' . $title . '</span>' . $ratingspan . '<span class="sectionName">' . $section . '</span><span>' . $speclist . '</span></a></li>';
            }
            // End of statuscode 200
        }

        // A 404 http statuscode means there are no results
        if (substr_count($output, "404 Not Found") > 0) {
            $summary .= '<strong>Geen resultaten gevonden';
        }

        // Buils the page
        $results = '<div class="result">
  <a title="Shopzoeker" href="' . htmlentities($_SERVER['PHP_SELF']) . '" id="logo">
  <img title="Shopzoeker" alt="Shopzoeker" src="images/shopzoek.jpg">
  </a>
  <div id="topbar">
	<div id="searchwrapper">
  <form action="' . htmlentities($_SERVER['PHP_SELF']) . '">
  <input type="text" class="searchbox" name="keyword" value="' . $keyword . '" onclick="clearText(this)" />
  <input type="image" src="images/searchsubmit.gif" class="searchbox_submit" value="" />
  <span class="niceselect">
	<select title="id" multiple="multiple" name="id" size="7">
	' . $selectlist . '
  </select> 
  </span>
  </form>   
  </div>
  ' . $keywordtext . '
  </div>';

        // Add summary and categories
        $results .= '<div class="categorylist">
  ' . $summary . '
  <ul>';
        $results .= $catlist;
        $results .= '</ul></div>';

        // Add products
        $results .= '<ul class="productlist">';
        $results .= $resultlist;
        $results .= '</ul><div style="clear: both;"></div></div>';

        // Display everything
        echo $results;
    ?>
    </body>
</html>