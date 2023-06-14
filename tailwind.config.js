module.exports = {
  mode: 'jit',
  purge: [
    './storage/frameworks/views/*.php',
    './resources/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        "primary"    : "#055A5B",
        "secondary"  : "#6CB909",
        "error"      : "#E74C3C",
        "tertiary"    : "#FFCB12",
        "background"  : "#F0F0F0",
        "border"      : "#DEDEDE",
        "dark"        : "#293039",
        "darkGrey"    : "#495362",
        "darkLight"   : "#CCCCCC",
        "from"          : "#055A5B",
        "to"        : "#6CB909",
        "confirmed" : "#32A7E2",
        "injury" : "#FF8700",
        "heal" : "#4BA83D",
        "death" : "#DC3434",
        "darken" : "#043A3A"
      },
      height: {
        "banner" : "480px",
        'social' : '30rem'
      },
      maxHeight: {
        'social' : '30rem'
      }
    },
    fontFamily :{
      opensans : ["Open Sans, sans-serif"]
    },
    container:{
      center: true,
      padding : "1rem",
      screen : {
        lg : "1124px",
        xl : "1124px",
        "2xl" : "1124px",
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
