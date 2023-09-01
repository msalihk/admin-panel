import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    content: [
        './resources/**/*.blade.php',
        "./resources/**/*.js",
        './vendor/filament/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
                footerGray: '#4c4c4c',
                footerBorderRight: '#949494',
                bbcRed: '#e91802',
                subtext: '#d3d3d3',
                tagGray: '#767676',
                sectionGray: '#4a4a4a',
                gray212121: '#212121',
                newsRed: '#B80000',
                detailBlack: '#141414',
            },
            fontFamily: {
                'roboto': ['Roboto', 'sans-serif'],
              }
        },
    },
    plugins: [
        forms,
        typography,
    ],
}
