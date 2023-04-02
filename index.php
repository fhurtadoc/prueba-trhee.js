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
<video autoplay muted loop id="myVideo">
  <source src="./estatics/mixkit-green-grass-close-up-loop-video-30602-medium.mp4" type="video/mp4">
</video> 
    <script type="module">

        import * as THREE from "./three.module.js";
        import { OrbitControls } from "./OrbitControls.js";

        const clock = new THREE.Clock();
        //creating scene
        var scene = new THREE.Scene();
        //scene.background = new THREE.Color("0x040e25");
  
        //add camera
        var camera = new THREE.PerspectiveCamera(
          30,
          window.innerWidth / window.innerHeight
        );
  
        //renderer
        var renderer = new THREE.WebGLRenderer({ alpha: true });
        renderer.setClearColor( 0x040e25, 0.3);
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);
  
        //add geometry
        var geometry = new THREE.SphereGeometry(0, 10, 10, 0);        
        var material = new THREE.MeshLambertMaterial();


        var loader= new THREE.TextureLoader()
        loader.load('./estatics/vector-football-soccer-ball-pattern.jpg', (texture)=>{
            material.map=texture
            animate();
        })

        var object = new THREE.Mesh(geometry, material);
        object.scale.set(0.9, 0.9, 0.9 );
        object.position.set(-2,0,0);
        
        //add Text   
        
        var loaderText = new THREE.FontLoader();
        loaderText.load('estatics/fonts/Bulletto Killa¬_Regular.json', function (font){
          

           var textMaterial= new THREE.MeshPhongMaterial({
             color:0xb8dce8, 
           })
           
           

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
          
          
          object.rotation.x += 0.007;  
          renderer.render(scene, camera);
          

        };
  
        
      </script>
    <div class="container">          
        <a href="./src/views/homepage.php">
            <span>Entrar</span>
        </a>
        <H1>SUPER LIGA</H1>
    </div>

</body>



</html>