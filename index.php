<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
    <link rel="stylesheet" href="./css/index.css">
    <!-- in this Script we bring the three.js librery -->    
</head>
<body>  
    <script type="module">

        import * as THREE from "./three.module.js";
        import { OrbitControls } from "./OrbitControls.js";

        const clock = new THREE.Clock();
        //creating scene
        var scene = new THREE.Scene();
        scene.background = new THREE.Color(0x040e25);
  
        //add camera
        var camera = new THREE.PerspectiveCamera(
          30,
          window.innerWidth / window.innerHeight
        );
  
        //renderer
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);
  
        //add geometry
        var geometry = new THREE.SphereGeometry(1, 50, 50, 0);        
        var material = new THREE.MeshLambertMaterial();


        var loader= new THREE.TextureLoader()
        loader.load('./estatics/wallpaperbetter.jpg.png', (texture)=>{
            material.map=texture
            animate();
        })

        var object = new THREE.Mesh(geometry, material);
        object.scale.set(0.9, 0.9, 0.9 );
        object.position.set(-2,0,0);
        
        //add Text   
        var text1, text2, text3, text4, text5, text6, text7   ;        
        var loaderText = new THREE.FontLoader();
        loaderText.load('estatics/fonts/Bulletto Killa¬_Regular.json', function (font){
           var geometryText1= new THREE.TextGeometry('html', {
             font:font,
             size: 0.05,
             height: 0.1
           });
           var geometryText2= new THREE.TextGeometry('CSS', {
             font:font,
             size: 0.05,
             height: 0.1
           });

           var geometryText3= new THREE.TextGeometry('PHP', {
             font:font,
             size: 0.05,
             height: 0.1
           });

           var geometryText4= new THREE.TextGeometry('JavaScript', {
             font:font,
             size: 0.05,
             height: 0.1
           });

           var geometryText5= new THREE.TextGeometry('Node.js', {
             font:font,
             size: 0.05,
             height: 0.1
           });

           var geometryText6= new THREE.TextGeometry('Angular.js', {
             font:font,
             size: 0.05,
             height: 0.1
           });

           var geometryText7= new THREE.TextGeometry('Java', {
             font:font,
             size: 0.05,
             height: 0.1
           });

           var textMaterial= new THREE.MeshPhongMaterial({
             color:0xb8dce8, 
           })
           
           text1=new THREE.Mesh(geometryText1, textMaterial);
           text1.position.set(-150,0,0);           
           scene.add(text1)  
           
           text2=new THREE.Mesh(geometryText2, textMaterial);
           text2.position.set(-150,0,0);           
           scene.add(text2) 
           
           text3=new THREE.Mesh(geometryText3, textMaterial);
           text3.position.set(-150,0,0);           
           scene.add(text3) 

           text4=new THREE.Mesh(geometryText4, textMaterial);
           text4.position.set(-150,0,0);           
           scene.add(text4) 

           text5=new THREE.Mesh(geometryText5, textMaterial);
           text5.position.set(-150,0,0);           
           scene.add(text5)

           text6=new THREE.Mesh(geometryText6, textMaterial);
           text6.position.set(-150,0,0);           
           scene.add(text6)

           text7=new THREE.Mesh(geometryText7, textMaterial);
           text7.position.set(-150,0,0);           
           scene.add(text7)

        });


        

        //end text

        let ligth= new THREE.DirectionalLight(0xffffff);
        ligth.position.set(0, 0 , 10);
        scene.add(ligth);
          
        const hash = document.location.hash.substr( 1 );
        scene.add(object);
  
        camera.position.z = 10;
  
        var controls = new OrbitControls(camera, renderer.domElement);
          
        controls.minDistance = 3;
        controls.maxDistance = 10;  
        //controls.enableZoom = false;
  
        //controls.enableRotate = false;
  
        controls.enableDamping = true;
        controls.dampingFactor = 0.5;  
        controls.maxPolarAngle = Math.PI;  
        controls.screenSpacePanning = true;
       
        //animation
        var animate = function () {
          requestAnimationFrame(animate);  
          const elapsed = clock.getElapsedTime();          
          
          text1.position.set(
            -2, 
            Math.sin( elapsed ) +0, 
            Math.cos( elapsed ) * -2  
            );  

          text2.position.set( 
            Math.sin( elapsed ) -2.1, 
            Math.cos( elapsed ) * 1  ,
            Math.cos( elapsed ) * 2  
            );

          text3.position.set( 
            Math.sin( elapsed ) -2, 
            0,
            Math.cos( elapsed ) * 3  
            ); 

            text4.position.set( 
            Math.sin( elapsed ) -2, 
            Math.cos( elapsed ) * -1,
            Math.cos( elapsed ) * -3  
            );

            text5.position.set( 
            -2, 
            Math.sin( elapsed ) +0, 
            Math.cos( elapsed ) * 3  
            );

            text6.position.set( 
            Math.cos( elapsed ) -2.1, 
            Math.cos( elapsed ) * 1  ,
            Math.sin( elapsed ) * 3  
            );

            text7.position.set( 
            Math.cos( elapsed ) -2, 
            0,
            Math.sin( elapsed ) * -2  
            );

          object.rotation.y += 0.007;  
          renderer.render(scene, camera);
          

        };
  
        
      </script>
    <div class="container">          
        <a href="./home.php">
            <span>Entrar</span>
        </a>
        <H1>ALEJO HURTADO</H1>
    </div>

</body>



</html>