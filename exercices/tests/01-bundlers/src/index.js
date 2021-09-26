import './style/main.styl'
import myFunction from './myFunction.js'
import Toto from './Toto.js'
import image1 from './images/image-1.jpg'

const $image = new Image()
$image.src = image1
document.body.append($image)

myFunction()
const toto = new Toto()