import Robot from './Robot.js'

export default class FlyingRobot extends Robot
{
    constructor(name, legs)
    {
        super(name, legs)
    }

    sayHi()
    {
        super.sayHi()
        console.log('And I can fly')
    }

    takeOff()
    {
        console.log(`Have a good flight ${this.name}`)
    }

    land()
    {
        console.log(`Welcome back ${this.name}`)
    }
}