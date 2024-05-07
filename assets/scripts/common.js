document.addEventListener('DOMContentLoaded', () => {
  document.body.classList.remove('preload')

  // Анимация меню при скролле
  const header = document.querySelector('.header')
  let prevYOffset

  window.addEventListener('scroll', () => {
    const currentYOffset = window.pageYOffset

    if (currentYOffset > header.offsetHeight && currentYOffset > prevYOffset) {
      header.style.top = `-${header.offsetHeight}px`
    } else {
      header.style.top = 0
    }

    prevYOffset = currentYOffset
  })

  // Анимация аккордиона
  const accordionTitles = document.querySelectorAll('.accordion__title')

  accordionTitles.forEach(title => {
    title.addEventListener('click', () => {
      title.parentElement.classList.toggle('open')
    })
  })
})
