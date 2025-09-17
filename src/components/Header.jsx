import React, { useState } from 'react'
import { Link, useLocation } from 'react-router-dom'
import Logo from '/images/Pigeon.png' // Make sure this path is correct

const Header = () => {
  const location = useLocation()
  const [isMenuOpen, setIsMenuOpen] = useState(false)

  return (
    <header className="bg-gradient-to-r from-slate-900 to-slate-800 text-white shadow-2xl sticky top-0 z-50 backdrop-blur-md">
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between py-4">
          {/* Logo + Site Name */}
          <div className="flex items-center space-x-3">
            <Link to="/" className="flex items-center hover:scale-105 transition-all duration-300">
              <img src={Logo} alt="Stalin and Co Logo" className="w-10 h-10 object-cover rounded-full" />
              <span className="ml-2 text-2xl font-bold">
                <span className="text-blue-400">Stalin</span> & Co., Auditors
              </span>
            </Link>
          </div>
          
          {/* Desktop Navigation */}
          <nav className="hidden md:flex space-x-8">
            <Link 
              to="/" 
              className={`relative hover:text-blue-400 transition-all duration-300 group ${location.pathname === '/' ? 'text-blue-400' : ''}`}
            >
              Home
              <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </Link>
            <Link 
              to="/about" 
              className={`relative hover:text-blue-400 transition-all duration-300 group ${location.pathname === '/about' ? 'text-blue-400' : ''}`}
            >
              About
              <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </Link>
            <Link 
              to="/services" 
              className={`relative hover:text-blue-400 transition-all duration-300 group ${location.pathname === '/services' ? 'text-blue-400' : ''}`}
            >
              Services
              <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </Link>
            <Link 
              to="/contact" 
              className={`relative hover:text-blue-400 transition-all duration-300 group ${location.pathname === '/contact' ? 'text-blue-400' : ''}`}
            >
              Contact
              <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </Link>
          </nav>

          {/* Mobile Menu Button */}
          <button 
            className="md:hidden"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        {/* Mobile Navigation */}
        {isMenuOpen && (
          <nav className="md:hidden pb-4 border-t border-slate-700 mt-4 pt-4">
            <div className="flex flex-col space-y-2">
              <Link 
                to="/" 
                className={`py-2 hover:text-blue-400 transition-colors ${location.pathname === '/' ? 'text-blue-400' : ''}`}
                onClick={() => setIsMenuOpen(false)}
              >
                Home
              </Link>
              <Link 
                to="/about" 
                className={`py-2 hover:text-blue-400 transition-colors ${location.pathname === '/about' ? 'text-blue-400' : ''}`}
                onClick={() => setIsMenuOpen(false)}
              >
                About
              </Link>
              <Link 
                to="/services" 
                className={`py-2 hover:text-blue-400 transition-colors ${location.pathname === '/services' ? 'text-blue-400' : ''}`}
                onClick={() => setIsMenuOpen(false)}
              >
                Services
              </Link>
              <Link 
                to="/contact" 
                className={`py-2 hover:text-blue-400 transition-colors ${location.pathname === '/contact' ? 'text-blue-400' : ''}`}
                onClick={() => setIsMenuOpen(false)}
              >
                Contact
              </Link>
            </div>
          </nav>
        )}
      </div>
    </header>
  )
}

export default Header