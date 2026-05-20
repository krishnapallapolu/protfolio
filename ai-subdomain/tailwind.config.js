/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./*.html"],
  safelist: [
    // toggled by sticky-nav scroll script — keep in build
    'bg-neutral-950/70', 'backdrop-blur-md', 'border-b', 'border-neutral-800/60', 'shadow-lg', 'shadow-black/20'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif']
      },
      colors: {
        brand: {
          DEFAULT: '#10b981',
          glow:    '#34d39955'
        }
      },
      backgroundImage: {
        'dot-grid':      "radial-gradient(circle, rgba(255,255,255,0.06) 1px, transparent 1px)",
        'radial-emerald':"radial-gradient(60% 50% at 50% 0%, rgba(16,185,129,0.18) 0%, rgba(10,10,10,0) 70%)",
        'noise':         "url(\"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='160' height='160'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/></filter><rect width='100%' height='100%' filter='url(%23n)' opacity='0.6'/></svg>\")"
      },
      backgroundSize: {
        'dot-grid': '22px 22px'
      },
      animation: {
        'pulse-slow': 'pulse 6s cubic-bezier(0.4,0,0.6,1) infinite',
        'float':      'float 8s ease-in-out infinite',
        'fade-up':    'fadeUp 0.7s ease-out forwards'
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%':      { transform: 'translateY(-12px)' }
        },
        fadeUp: {
          '0%':   { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' }
        }
      }
    }
  },
  plugins: []
};
