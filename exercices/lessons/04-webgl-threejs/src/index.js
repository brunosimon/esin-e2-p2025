import './style/main.styl'

import * as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js'

/**
 * Scene
 */
const scene = new THREE.Scene()

/**
 * Sizes
 */
const sizes = {}
sizes.width = window.innerWidth
sizes.height = window.innerHeight

/**
 * Camera
 */
const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height)
camera.position.x = 10
camera.position.y = 4
camera.position.z = 10
scene.add(camera)

// /**
//  * Object
//  */
// // Material
// const material = new THREE.MeshStandardMaterial({
//     color: 0xffffff,
//     roughness: 0.3,
//     metalness: 0.3,
//     side: THREE.DoubleSide
// })

// // Sphere
// const sphere = new THREE.Mesh(new THREE.SphereGeometry(2, 16, 16), material)
// sphere.position.x = - 6
// scene.add(sphere)

// // Plane
// const plane = new THREE.Mesh(new THREE.PlaneGeometry(4, 4, 40, 40), material)
// scene.add(plane)

// // Torus Knot
// const torusKnot = new THREE.Mesh(new THREE.TorusKnotGeometry(1.5, 0.5, 128, 16), material)
// torusKnot.position.x = 6
// scene.add(torusKnot)

// // Floor
// const floor = new THREE.Mesh(new THREE.PlaneGeometry(20, 20, 1, 1), material)
// floor.position.y = - 3
// floor.rotation.x -= Math.PI * 0.5
// scene.add(floor)

// /**
//  * Lights
//  */
// const ambientLight = new THREE.AmbientLight(0xffffff, 0.3)
// scene.add(ambientLight)

// const directionalLight = new THREE.DirectionalLight(0x00fffc, 0.3)
// directionalLight.position.x = - 2
// directionalLight.position.y = 3
// directionalLight.position.z = 4
// scene.add(directionalLight)

// const hemisphereLight = new THREE.HemisphereLight(0xff0000, 0x0000ff, 0.3)
// scene.add(hemisphereLight)

// const pointLight = new THREE.PointLight(0xff9000, 1, 10)
// pointLight.position.x = 2
// pointLight.position.y = 3
// pointLight.position.z = 4
// scene.add(pointLight)

// const rectAreaLight = new THREE.RectAreaLight(0x4e00ff, 3, 5, 5)
// rectAreaLight.position.set(5, - 3, 5)
// rectAreaLight.lookAt(new THREE.Vector3())
// scene.add(rectAreaLight)

// const spotLight = new THREE.SpotLight(0x00ff9c, 1, 15, Math.PI * 0.2, 0.5)
// spotLight.position.y = 2
// spotLight.position.z = 3
// scene.add(spotLight)

// spotLight.target.position.z = - 2
// scene.add(spotLight.target)

// // Helpers
// const directionalLightHelper = new THREE.DirectionalLightHelper(directionalLight)
// scene.add(directionalLightHelper)

// const hemisphereLightHelper = new THREE.HemisphereLightHelper(hemisphereLight)
// scene.add(hemisphereLightHelper)

// const pointLightHelper = new THREE.PointLightHelper(pointLight)
// scene.add(pointLightHelper)

// const spotLightHelper = new THREE.SpotLightHelper(spotLight)
// scene.add(spotLightHelper)

/**
 * Particles
 */
// Geometry
const count = 2000
const positionArray = new Float32Array(count * 3)
const colorArray = new Float32Array(count * 3)

for(let i = 0; i < count; i++)
{
    positionArray[i * 3 + 0] = (Math.random() - 0.5) * 50 // x
    positionArray[i * 3 + 1] = (Math.random() - 0.5) * 50 // y
    positionArray[i * 3 + 2] = (Math.random() - 0.5) * 50 // z
    
    colorArray[i * 3 + 0] = 1 // r
    colorArray[i * 3 + 1] = Math.random() // g
    colorArray[i * 3 + 2] = Math.random() // b
}

const particlesGeometry = new THREE.BufferGeometry()
particlesGeometry.setAttribute('position', new THREE.BufferAttribute(positionArray, 3))
particlesGeometry.setAttribute('color', new THREE.BufferAttribute(colorArray, 3))

// Texture
const textureLoader = new THREE.TextureLoader()
const particleTexture = textureLoader.load('textures/particles/13.png')

// Material
const particlesMaterial = new THREE.PointsMaterial({
    size: 3,
    sizeAttenuation: true,
    // color: new THREE.Color(0xff0000),
    vertexColors: true,
    alphaMap: particleTexture,
    transparent: true,
    depthTest: false,
    blending: THREE.AdditiveBlending
})


// Points
const particles = new THREE.Points(particlesGeometry, particlesMaterial)
scene.add(particles)
/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer()
// renderer.setClearColor('blue')
renderer.setSize(sizes.width, sizes.height)
document.body.append(renderer.domElement)

/**
 * Controls
 */
const controls = new OrbitControls(camera, renderer.domElement)

// /**
//  * Shadow
//  */
// renderer.shadowMap.enabled = true

// sphere.receiveShadow = false
// sphere.castShadow = true
// plane.receiveShadow = false
// plane.castShadow = true
// torusKnot.receiveShadow = false
// torusKnot.castShadow = true
// floor.receiveShadow = true
// floor.castShadow = false

// directionalLight.castShadow = true
// directionalLight.shadow.camera.top = 10
// directionalLight.shadow.camera.right = 10
// directionalLight.shadow.camera.bottom = - 10
// directionalLight.shadow.camera.left = - 10

// pointLight.castShadow = true

// spotLight.castShadow = true

/**
 * Resize
 */
window.addEventListener('resize', () =>
{
    // Update size
    sizes.width = window.innerWidth
    sizes.height = window.innerHeight

    // Update controls
    controls.update()

    // Update camera
    camera.aspect = sizes.width / sizes.height
    camera.updateProjectionMatrix()

    // Update renderer
    renderer.setSize(sizes.width, sizes.height)
})

/**
 * Animate
 */
const tick = () =>
{
    const time = Date.now()

    // particles.rotation.y = time * 0.001
    // particles.position.y = Math.sin(time * 0.001)

    for(let i = 0; i < count; i++)
    {
        const x = positionArray[i * 3 + 0]
        const y = positionArray[i * 3 + 1]
        const z = positionArray[i * 3 + 2]

        positionArray[i * 3 + 0] = x
        positionArray[i * 3 + 1] = Math.sin(time * 0.001 + x * 0.1) + Math.sin(time * 0.001 + z * 0.3)
        positionArray[i * 3 + 2] = z
    }

    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(positionArray, 3))

    renderer.render(scene, camera)

    window.requestAnimationFrame(tick)
}
tick()