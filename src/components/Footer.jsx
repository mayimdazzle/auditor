import React from 'react'
import { Link } from 'react-router-dom'

const Footer = () => {
  const currentYear = new Date().getFullYear()

  const footerLinks = {
    services: [
      { name: "Financial Auditing", href: "/services" },
      { name: "Tax Services", href: "/services" },
      { name: "Business Consulting", href: "/services" },
      { name: "GST Services", href: "/services" }
    ],
    quickLinks: [
      { name: "About Us", href: "/about" },
      { name: "Our Services", href: "/services" },
      { name: "Contact", href: "/contact" },
      { name: "Home", href: "/" }
    ]
  }

  return (
    <footer className="bg-gradient-to-r from-slate-900 to-slate-800 text-white">
      <div className="container mx-auto px-4 py-16">
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Company Info */}
          <div className="lg:col-span-2">
            <h3 className="text-2xl font-bold mb-4">
              <span className="text-blue-400">Stalin</span> & Co., Auditors
            </h3>
            <p className="text-gray-300 mb-6 leading-relaxed max-w-md">
              Your trusted partner in financial excellence and business growth. 
              We provide comprehensive auditing, tax, and consulting services 
              to help your business achieve its goals.
            </p>
            <div className="space-y-3">
              <div className="flex items-center space-x-3">
                <div className="w-5 h-5 text-blue-400">📞</div>
                <span className="text-gray-300">+91 9487426222</span>
              </div>
              <div className="flex items-center space-x-3">
                <div className="w-5 h-5 text-blue-400">📧</div>
                <span className="text-gray-300">stalinauditors@gmail.com</span>
              </div>
              <div className="flex items-center space-x-3">
                <div className="w-5 h-5 text-blue-400">⏰</div>
                <span className="text-gray-300">Mon - Fri: 9:00 AM - 6:00 PM</span>
              </div>
            </div>
          </div>

          {/* Our Services */}
          <div>
            <h4 className="text-lg font-semibold mb-6 text-blue-400">Our Services</h4>
            <ul className="space-y-3">
              {footerLinks.services.map((link, index) => (
                <li key={index}>
                  <Link 
                    to={link.href} 
                    className="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 transform inline-block"
                  >
                    {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-lg font-semibold mb-6 text-blue-400">Quick Links</h4>
            <ul className="space-y-3">
              {footerLinks.quickLinks.map((link, index) => (
                <li key={index}>
                  <Link 
                    to={link.href} 
                    className="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 transform inline-block"
                  >
                    {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>
        </div>

        {/* Bottom Section */}
        <div className="border-t border-slate-700 mt-12 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <p className="text-gray-400 text-sm mb-4 md:mb-0">
              &copy; {currentYear} Stalin & Co., Auditors. All rights reserved.
            </p>
            <div className="flex space-x-6">
              <a href="/privacy" className="text-gray-400 hover:text-white transition-colors duration-300">
                Privacy Policy
              </a>
              <a href="/termsofservices" className="text-gray-400 hover:text-white transition-colors duration-300">
                Terms of Service
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  )
}

export default Footer