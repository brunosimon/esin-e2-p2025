import './style/main.styl'

import * as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js'

/**
 * Textures
 */
const textureLoader = new THREE.TextureLoader()

const grassColorTexture = textureLoader.load('textures/house/grass/color.jpg')
// grassColorTexture.repeat.x = 2
// grassColorTexture.repeat.y = 2
// grassColorTexture.wrapS = THREE.RepeatWrapping
// grassColorTexture.wrapT = THREE.RepeatWrapping
// grassColorTexture.rotation = Math.PI * 0.25
// grassColorTexture.center.x = 0.5
// grassColorTexture.center.y = 0.5
// grassColorTexture.magFilter = THREE.NearestFilter
// grassColorTexture.minFilter = THREE.NearestFilter

const doorColorTexture = textureLoader.load('textures/house/door/color.jpg')
const doorAmbientOcclusionTexture = textureLoader.load('textures/house/door/ambientOcclusion.jpg')
const doorHeightTexture = textureLoader.load('textures/house/door/height.png')
const doorMetalnessTexture = textureLoader.load('textures/house/door/metalness.jpg')
const doorNormalTexture = textureLoader.load('textures/house/door/normal.jpg')
const doorAlphaTexture = textureLoader.load('textures/house/door/alpha.jpg')
const doorRoughnessTexture = textureLoader.load('textures/house/door/roughness.jpg')
const matcapTexture = textureLoader.load('textures/matcaps/1.jpg')

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
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
camera.position.set(- 8, 4, 8)
scene.add(camera)

/**
 * Objects
 */
// Material
const material = new THREE.MeshStandardMaterial({
    color: 0xffffff,
    roughness: 0.3,
    metalness: 0.3
})


// Sphere
const sphere = new THREE.Mesh(new THREE.SphereGeometry(2, 16, 16), material)
sphere.position.x = - 6
scene.add(sphere)

// Plane
const plane = new THREE.Mesh(new THREE.PlaneGeometry(4, 4, 40, 40), material)
scene.add(plane)

// Torus Knot
const torusKnot = new THREE.Mesh(new THREE.TorusKnotGeometry(1.5, 0.5, 128, 16), material)
torusKnot.position.x = 6
scene.add(torusKnot)

// Floor
const floor = new THREE.Mesh(new THREE.PlaneGeometry(20, 20, 1, 1), material)
floor.position.y = - 3
floor.rotation.x -= Math.PI * 0.5
scene.add(floor)

sphere.castShadow = true
sphere.receiveShadow = true
plane.castShadow = true
plane.receiveShadow = true
torusKnot.castShadow = true
torusKnot.receiveShadow = true
floor.receiveShadow = true

/**
 * Lights
 */
const ambientLight = new THREE.AmbientLight(0xffffff, 0.3)
scene.add(ambientLight)

const directionalLight = new THREE.DirectionalLight(0x00fffc, 0.3)
directionalLight.position.x = - 2
directionalLight.position.y = 3
directionalLight.position.z = 4
scene.add(directionalLight)

const hemisphereLight = new THREE.HemisphereLight(0xff0000, 0x0000ff, 0.3)
scene.add(hemisphereLight)

const pointLight = new THREE.PointLight(0xff9000, 1, 10)
pointLight.position.x = 2
pointLight.position.y = 3
pointLight.position.z = 4
scene.add(pointLight)

const rectAreaLight = new THREE.RectAreaLight(0x4e00ff, 3, 5, 5)
rectAreaLight.position.x = 5
rectAreaLight.position.z = 5
rectAreaLight.position.y = - 3
rectAreaLight.lookAt(new THREE.Vector3())
scene.add(rectAreaLight)

const spotLight = new THREE.SpotLight(0x00ff9c, 1, 0, Math.PI * 0.2, 0.5)
spotLight.position.z = 3
spotLight.position.y = 2
scene.add(spotLight)

spotLight.target.position.z = - 2
scene.add(spotLight.target)

// Helpers
const directionalLightHelper = new THREE.DirectionalLightHelper(directionalLight)
scene.add(directionalLightHelper)

const hemisphereLightHelper = new THREE.HemisphereLightHelper(hemisphereLight)
scene.add(hemisphereLightHelper)

const pointLightHelper = new THREE.PointLightHelper(pointLight)
scene.add(pointLightHelper)

const spotLightHelper = new THREE.SpotLightHelper(spotLight)
scene.add(spotLightHelper)

// Shadows
directionalLight.castShadow = true
pointLight.castShadow = true
spotLight.castShadow = true

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer()
renderer.shadowMap.enabled = true
renderer.setSize(sizes.width, sizes.height)
document.body.append(renderer.domElement)

/**
 * Controls
 */
const cameraControls = new OrbitControls(camera, renderer.domElement)
cameraControls.enableDamping = true

/**
 * Resize
 */
window.addEventListener('resize', () =>
{
    // Update size
    sizes.width = window.innerWidth
    sizes.height = window.innerHeight

    // Update camera
    camera.aspect = sizes.width / sizes.height
    camera.updateProjectionMatrix()

    // Update renderer
    renderer.setSize(sizes.width, sizes.height)
})

/**
 * Cursor
 */
const cursor = {}
cursor.x = 0
cursor.y = 0

window.addEventListener('mousemove', (_event) =>
{
    cursor.x = _event.clientX / sizes.width - 0.5
    cursor.y = _event.clientY / sizes.height - 0.5
})

/**
 * Animate
 */
const tick = () =>
{
    const time = Date.now()

    cameraControls.update()

    renderer.render(scene, camera)

    window.requestAnimationFrame(tick)
}
tick()