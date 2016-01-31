<?php
    mysql_connect('localhost', 'root', '');        
    mysql_select_db('test');
//$dblink = mysql_connect('localhost','root','') or die(mysql_error());
//    if($_POST['submit'])
    if(isset($_POST['submitItem']))
    {
     foreach ($_POST['item'] as $key => $value) 
        {
            $item = $_POST["item"][$key];
//            $price = $_POST["price"][$key];
            $qty = $_POST["qty"][$key];

            $sql = mysql_query("insert into dummy values ('','$item', '$qty')");        
        }

    }   
?>
    <html>
        <head>
<!--
               <script type="text/javascript">
        	jQuery(document).ready(function(){
				$('#regionsearch').autocomplete({
					source : 'search_region.php',
					minLength : 1,	
				});
			});        
        </script>
-->
        </head>
    <body>
        <link rel="stylesheet" href="css/jquery-ui-1.8.2.custom.css" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/ganti.css" />
<!--        <INPUT type="button" value="Add Menu" onClick="addRow('dataTable')" />-->
        <INPUT class="btn btn-warning" type="button" value="Add Menu" onClick="addRow('dataTable')" />

        <INPUT class="btn btn-warning" type="button" value="Delete Menu" onClick="deleteRow('dataTable')" />

        <form action="" method="post" name="f">

            <TABLE width="425" border="0    " class="table">
                <thead>
                    <tr>
                        <th width="5%"></th>
                        <th width="65%" style="text-align:center;">Makanan dan Minuman</th>
                        <!--                        <th width="121">Price</th>-->
                        <th width="30%"style="text-align:center;">Jumlah</th>

                    </tr>
                </thead>
                <tbody id="dataTable">

                </tbody>
            </TABLE>

            <INPUT class="btn btn-warning" type="submit" value="Submit" name="submitItem" />
        </form>
        <script>
            function addRow(tableID) {

                var table = document.getElementById(tableID);

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                var element1 = document.createElement("input");
                element1.className ="custom-checkbox";
                element1.type = "checkbox";
                element1.name = "chkbox[]";
                cell1.appendChild(element1);

                var cell2 = row.insertCell(1);
//                                cell2.innerHTML = "<input type='text' name='item[]'>";
                cell2.innerHTML = "<form action='' method='post'><input style='width:100%;text-align:center;' name='item[]' id='regionsearch' type='text'/></form>";
//                cell2.innerHTML = "<form action='' method='post'><input style='width:100%;text-align:center;' name='item[]' id='regionsearch' type='text'/></form>";

                //                var cell3 = row.insertCell(2);
                //                cell3.innerHTML = "<input type='text'  name='price[]' />";

                var cell4 = row.insertCell(2);
                cell4.innerHTML = "<input style='width:100%; text-align:center;' type='text'  name='qty[]' />";
            }

            function deleteRow(tableID) {
                try {
                    var table = document.getElementById(tableID);
                    var rowCount = table.rows.length;

                    for (var i = 0; i < rowCount; i++) {
                        var row = table.rows[i];
                        var chkbox = row.cells[0].childNodes[0];
                        if (null != chkbox && true == chkbox.checked) {
                            table.deleteRow(i);
                            rowCount--;
                            i--;
                        }
                    }
                } catch (e) {
                    alert(e);
                }
            }
        </script>

        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquerry-2.0.2.min.js"></script>
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
<!--
        <script type="text/javascript">
            jQuery(document).ready(function () {
                $('#regionsearch').autocomplete({
                    source: 'search_region.php',
                    minLength: 1,
                });
            });
        </script>
-->
    </body>

    </html>