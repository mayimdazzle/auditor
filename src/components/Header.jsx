import React from 'react'
import { Link, useLocation } from 'react-router-dom'

const Header = () => {
  const location = useLocation()

  return (
    <header className="bg-slate-900 text-white">
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between py-4">
          <div className="text-2xl font-bold">
            <Link to="/">Stalin & Co., Auditors</Link>
          </div>
          <nav className="hidden md:flex space-x-8">
            <Link 
              to="/" 
              className={`hover:text-blue-400 transition-colors ${location.pathname === '/' ? 'text-blue-400' : ''}`}
            >
              Home
            </Link>
            <Link 
              to="/about" 
              className={`hover:text-blue-400 transition-colors ${location.pathname === '/about' ? 'text-blue-400' : ''}`}
            >
              About
            </Link>
            <Link 
              to="/services" 
              className={`hover:text-blue-400 transition-colors ${location.pathname === '/services' ? 'text-blue-400' : ''}`}
            >
              Services
            </Link>
            <Link 
              to="/contact" 
              className={`hover:text-blue-400 transition-colors ${location.pathname === '/contact' ? 'text-blue-400' : ''}`}
            >
              Contact
            </Link>
          </nav>
        </div>
      </div>
    </header>
  )
}

export default Header