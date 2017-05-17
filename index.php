<!DOCTYPE HTML >

<html>
<head>
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>EditableGrid - Issue 24</title>

    <script src="js/editablegrid.js"></script>
    <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_renderers.js" ></script>
    <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_editors.js" ></script>
    <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_validators.js" ></script>
    <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_utils.js" ></script>
    <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_charts.js" ></script>
    <link rel="stylesheet" href="css/editablegrid.css" type="text/css" media="screen">


    <script>
        window.onload = function() {

            editableGrid1 = new EditableGrid("DemoGridAttach");
            editableGrid1.load({ metadata: [
                <? for ($c = 1; $c <= 10; $c++) { ?>
                { name: "COL<?= $c ?>", datatype: "string", editable: true } <?= $c == 11 ? "" : ",\n" ?>
                <? } ?>
            ]});
            editableGrid1.attachToHTMLTable('htmlgrid');
            editableGrid1.renderGrid();

        };
    </script>

</head>

<body>


<div style="height: 100%; width: 100%; margin-left: auto; margin-right: auto; overflow: auto; padding-left: 15px;">
    <h1>Voetgolf Houten Scorekaart:</h1>
    <div style="height: 100%; overflow: auto;">
        <table id="htmlgrid" class="grid">
            <tr class="firstRow">
                <th class="firstColumn">Hole</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>Totaal</th>
            </tr>
            <tr class="secondRow">
                <th class="firstColumn">Afstand</th>
                <th>78 m</th>
                <th>36 m</th>
                <th>11 m</th>
                <th>72 m</th>
                <th>72 m</th>
                <th>39 m</th>
                <th>23 m</th>
                <th>47 m</th>
                <th>64 m</th>
                <th>443 m</th>
            </tr>
            <tr class="thirdRow">
                <th class="firstColumn">Par</th>
                <th>4</th>
                <th>4</th>
                <th>3</th>
                <th>4</th>
                <th>4</th>
                <th>3</th>
                <th>2</th>
                <th>4</th>
                <th>4</th>
                <th>33</th>
            </tr>
            <tr id="R1" class="rowWhite">
                <th class="firstColumn">1.</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="R2" class="rowGrey">
                <th class="firstColumn">2.</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="R3" class="rowWhite">
                <th class="firstColumn">3.</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="R4"  class="rowGrey">
                <th class="firstColumn">4.</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="R5"  class="rowWhite">
                <th class="firstColumn">5.</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="R6" class="rowGrey">
                <th class="firstColumn">6.</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

</body>

</html>
