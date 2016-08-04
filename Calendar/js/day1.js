
$(document).on('ready',function(){
                
        //$("form")[0].reset();
    
        var colors= [ '#26C6DA', '#00BFA5', '#FFEB3B', '#FF9800','#B2FF59','#FF5252'];
        var x = Math.floor((Math.random() * 6) );
        $('.miniform').css("background-color", colors[x]);
        
    
    $('#dI').click(function(){
        
        var add = '<div class="form-group "><div class="col-md-12 "><br/><label >Entregable:</label></div><div class="col-md-10 "> <input type="text" class="form-control input-md" id="nombre" name="entregables[]" placeholder="sin números "><br/><label >Fecha inicial:</label><input id="dp" type="date" class="form-control" name="entregables[]"><br/><label >Fecha final:</label><input id="dp" type="date" class="form-control" name="entregables[]"><br/></div></div>';
        
         $(add).insertBefore("#lastDI");
         
    });
    
    $('#dR').click(function(){
        
        var add = '<div class="form-group "><div class="col-md-12 "><br/><label >Entregable:</label></div><div class="col-md-10 "> <input type="text" class="form-control input-md" id="nombre" name="entregablesR[]" placeholder="sin números "><br/><label >Fecha inicial:</label><input id="dp" type="date" class="form-control" name="entregablesR[]"><br/><label >Fecha final:</label><input id="dp" type="date" class="form-control" name="entregablesR[]"><br/></div></div>';
        
         $(add).insertBefore("#lastDR");
         
    });
    
    $('#iI').click(function(){
        
        var add = '<div class="form-group "><div class="col-md-12 "><br/><label >Entregable:</label></div><div class="col-md-10 "> <input type="text" class="form-control input-md" id="nombre" name="entregables[]" placeholder="sin números"><br/><label >Fecha inicial:</label><input id="dp" type="date" class="form-control" name="entregables[]"><br/><label >Fecha final:</label><input id="dp" type="date" class="form-control" name="entregables[]"><br/></div></div>';
        
         $(add).insertBefore("#lastII");
         
    });
    
    $('#iR').click(function(){
        
        var add = '<div class="form-group "><div class="col-md-12 "><br/><label >Entregable:</label></div><div class="col-md-10 "> <input type="text" class="form-control input-md" id="nombre" name="entregablesR[]" placeholder="sin números al inicio"><br/><label >Fecha inicial:</label><input id="dp" type="date" class="form-control" name="entregablesR[]"><br/><label >Fecha final:</label><input id="dp" type="date" class="form-control" name="entregablesR[]"><br/></div></div>';
        
         $(add).insertBefore("#lastIR");
         
    });
    
    $('#pI').click(function(){
        
        var add = '<div class="form-group "><div class="col-md-12 "><br/><label >Entregable:</label></div><div class="col-md-10 "> <input type="text" class="form-control input-md" id="nombre" name="entregables[]" placeholder="sin números"><br/><label >Fecha inicial:</label><input id="dp" type="date" class="form-control" name="entregables[]"><br/><label >Fecha final:</label><input id="dp" type="date" class="form-control" name="entregables[]"><br/></div></div>';
        
         $(add).insertBefore("#lastPI");
         
    });
    
    $('#pR').click(function(){
        
        var add = '<div class="form-group "><div class="col-md-12 "><br/><label >Entregable:</label></div><div class="col-md-10 "> <input type="text" class="form-control input-md" id="nombre" name="entregablesR[]" placeholder="sin números "><br/><label >Fecha inicial:</label><input id="dp" type="date" class="form-control" name="entregablesR[]"><br/><label >Fecha final:</label><input id="dp" type="date" class="form-control" name="entregablesR[]"><br/></div></div>';
        
         $(add).insertBefore("#lastPR");
         
    });
    
    $("input").keypress(function txNombres() {
        //alert("HEY");
        $(this).css("background-color", "yellow");
        if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
            event.returnValue = false;//no es texto
    });
    
    
    
});



  
 