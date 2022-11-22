
 var w =0;  
 var validador =1,validador2=1,validador3=1,validador4=1;

 document.getElementById("a1").addEventListener('click',function(e){
    e.preventDefault();


    if(validador==1){
     
        document.getElementById('capa1').style.boxShadow='0px 15px 25px';
        
        document.getElementById('capa1').style.backgroundColor ='rgb(8 84 42 / 70%)';
        document.getElementById('a1').style.top='10%';
        document.getElementById('a1').style.color='rgb(9, 255, 140)';
        document.getElementById('p1').style.visibility='visible';
           validador=2;
        }else if(validador==2){
        document.getElementById('capa1').style.backgroundColor ='transparent';
        document.getElementById('a1').style.top='45%';
        document.getElementById('p1').style.visibility='hidden'; 
        document.getElementById('a1').style.color='white';
        document.getElementById('capa1').style.boxShadow='0px 0px 2px';
        validador=1;
        
        
        }


 })



    
    function abrirImagen2(){
    
    
    if(validador2==1){
    
    document.getElementById('capa2').style.boxShadow='0px 15px 25px';
    document.getElementById('capa2').style.backgroundColor ='rgb(8 84 42 / 70%)';
    document.getElementById('a2').style.top='10%';
    document.getElementById('a2').style.color='rgb(9, 255, 140)';
    document.getElementById('p2').style.visibility='visible';
       validador2=2;
    }else if(validador2==2){
    document.getElementById('capa2').style.backgroundColor ='transparent';
    document.getElementById('a2').style.top='45%';
    document.getElementById('p2').style.visibility='hidden'; 
    document.getElementById('a2').style.color='white';
    document.getElementById('capa2').style.boxShadow='0px 0px 2px';
    validador2=1;
    
    
    }
    
    }
    
    function abrirImagen3(){
    
    
    if(validador3==1){
    document.getElementById('capa3').style.boxShadow='0px 15px 25px';
    document.getElementById('capa3').style.backgroundColor ='rgb(8 84 42 / 70%)';
    document.getElementById('a3').style.top='10%';
    document.getElementById('a3').style.color='rgb(9, 255, 140)';
    document.getElementById('p3').style.visibility='visible';
       validador3=2;
    }else if(validador3==2){
    document.getElementById('capa3').style.backgroundColor ='transparent';
    document.getElementById('a3').style.top='45%';
    document.getElementById('p3').style.visibility='hidden'; 
    document.getElementById('a3').style.color='white';
    document.getElementById('capa3').style.boxShadow='0px 0px 2px';
    validador3=1;
    
    
    }
    
    }
    
    function abrirImagen4(){
     
    
    if(validador4==1){
       document.getElementById('capa4').style.boxShadow='0px 15px 25px';
    document.getElementById('capa4').style.backgroundColor ='rgb(8 84 42 / 70%)';
    document.getElementById('a4').style.top='10%';
    document.getElementById('a4').style.color='rgb(9, 255, 140)';
    document.getElementById('p4').style.visibility='visible';
       validador4=2;
    }else if(validador4==2){
    document.getElementById('capa4').style.backgroundColor ='transparent';
    document.getElementById('a4').style.top='45%';
    document.getElementById('p4').style.visibility='hidden'; 
    document.getElementById('a4').style.color='white';
    document.getElementById('capa4').style.boxShadow='0px 0px 2px';
    validador4=1;
    
    
    }
    
    }
    
    