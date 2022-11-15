
  $('#example').DataTable(
      
       {     
        "responsive" : true,
        
        "language": {
         
          "searchPlaceholder" : "Rechercher" ,
          "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json",
          "search": "",
          
      },
      
      "dom": 'Bfrtip',
      "buttons": [
            
        'pdfHtml5',
        'print',
        'colvis'
    ]
     } 
      );



function checkAll(bx) {
var cbs = document.getElementsByTagName('input');
for(var i=0; i < cbs.length; i++) {
  if(cbs[i].type == 'checkbox') {
    cbs[i].checked = bx.checked;
  }
}
}

function addRow(tableID) {

  var table = document.getElementById(tableID);

  var rowCount = table.rows.length;
  if (rowCount >= 21) { // +1 for header row.
    // message
    return;
  }
  var row = table.insertRow(rowCount);

  var cell1 = row.insertCell(0);
  var element1 = document.createElement("input");
  element1.type = "checkbox";
  element1.name = "chkbox[]";
  cell1.appendChild(element1);

  var cell2 = row.insertCell(1);
  cell2.innerHTML = rowCount;

  var cell3 = row.insertCell(2);
  var element2 = document.createElement("input");
  element2.type = "text";
  element2.name = "txtbox[]";
  cell3.appendChild(element2);

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