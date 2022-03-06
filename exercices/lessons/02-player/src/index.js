import './style/main.styl'

const playerElement = document.querySelector('.player')
const videoElement = playerElement.querySelector('video')
const playButtonElement = playerElement.querySelector('.play')
const pauseButtonElement = playerElement.querySelector('.pause')
const seekbarElement = playerElement.querySelector('.seekbar')
const seekbarFillElement = playerElement.querySelector('.seekbar .fill')

playButtonElement.addEventListener('click', () =>
{
    videoElement.play()
})

pauseButtonElement.addEventListener('click', () =>
{
    videoElement.pause()
})

videoElement.addEventListener('timeupdate', () =>
{
    const ratio = videoElement.currentTime / videoElement.duration
    seekbarFillElement.style.transform = `scaleX(${ratio})`
})

seekbarElement.addEventListener('mousedown', (event) =>
{
    const seekbarLeft = seekbarElement.offsetLeft
    const seekbarWidth = seekbarElement.offsetWidth

    const x = event.clientX - seekbarLeft
    const ratio = x / seekbarWidth
    const time = ratio * videoElement.duration

    videoElement.currentTime = time
})