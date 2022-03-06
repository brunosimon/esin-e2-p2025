import Robot from './Robot.js'
import FlyingRobot from './FlyingRobot.js'

const wallE = new Robot('Wall-e', 0)
const ultron = new FlyingRobot('Ultron', 2)
const astroBoy = new FlyingRobot('Astro Boy', 2)

ultron.takeOff()
