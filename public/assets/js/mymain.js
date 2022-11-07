
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