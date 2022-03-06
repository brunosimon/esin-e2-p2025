const $player = document.querySelector('.player')
const $video = $player.querySelector('.video')
const $controls = $player.querySelector('.controls')
const $play = $controls.querySelector('.play')
const $pause = $controls.querySelector('.pause')
const $seekbar = $controls.querySelector('.seekbar')
const $seekbarFill = $seekbar.querySelector('.fill')

$play.addEventListener('click', () =>
{
    $video.play()
})

$pause.addEventListener('click', () =>
{
    $video.pause()
})

$video.addEventListener('timeupdate', () =>
{
    const scale = $video.currentTime / $video.duration
    $seekbarFill.style.transform = `scaleX(${scale})`
})

$seekbar.addEventListener('click', (_event) =>
{
    const seekbarLeft = $seekbar.offsetLeft
    const seekbarWidth = $seekbar.offsetWidth
    const delta = _event.clientX - seekbarLeft
    const ratio = delta / seekbarWidth
    const time = ratio * $video.duration

    $video.currentTime = time
})