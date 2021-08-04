module.exports = {
  mode:'jit',
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'body': ['iraniansans', 'sans-serif']
      },
      backgroundColor: {
        skin: {
          base: 'var(--color-background)',
          box: 'var(--color-box)',
        }
      },
      colors: {
        skin: {
          box: 'var(--color-box)',
          main: 'var(--color-main)',
          border: 'var(--color-border)',
          primary: 'var(--color-text)',
          second: 'var(--color-text-second)',
        }
      },
      height: {
        skin: {
          sidebar: 'var(--size-sidebar)',
          base: 'var(--size-base)',
          img: 'var(--size-img)',
          darkmode: 'var(--size-darkmode-toggle)',
        }
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
