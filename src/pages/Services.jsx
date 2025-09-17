import React from 'react'
import { Link } from 'react-router-dom'

const TermsOfServices = () => {
  const services = [
    {
      icon: "📊",
      title: "Financial Auditing",
      description: "Comprehensive financial statement audits to ensure accuracy and compliance with industry standards",
      features: ["Statutory Audits", "Internal Audits", "Concurrent Audits", "Management Audits"],
      color: "from-blue-500 to-blue-600"
    },
    {
      icon: "📋",
      title: "Tax Services", 
      description: "Expert tax planning, preparation, and compliance services for individuals and businesses",
      features: ["Income Tax Planning", "Tax Return Filing", "Tax Compliance", "Appeal Services"],
      color: "from-green-500 to-green-600"
    },
    {
      icon: "💼",
      title: "Business Consulting",
      description: "Strategic business consulting to help optimize your operations and drive growth",
      features: ["Business Strategy", "Financial Planning", "Risk Management", "Process Improvement"],
      color: "from-purple-500 to-purple-600"
    },
    {
      icon: "🏛️",
      title: "GST Services",
      description: "Complete GST registration, filing, and compliance services for seamless operations",
      features: ["GST Registration", "Return Filing", "GST Compliance", "Advisory Services"],
      color: "from-orange-500 to-orange-600"
    },
    {
      icon: "📈",
      title: "Financial Planning",
      description: "Comprehensive financial planning and advisory services for long-term success",
      features: ["Investment Planning", "Cash Flow Analysis", "Budgeting", "Financial Forecasting"],
      color: "from-teal-500 to-teal-600"
    },
    {
      icon: "🛡️",
      title: "Compliance Services",
      description: "Ensure your business meets all regulatory requirements and industry standards",
      features: ["Regulatory Compliance", "Due Diligence", "Risk Assessment", "Policy Development"],
      color: "from-red-500 to-red-600"
    }
  ]

  return (
    <div>
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 text-white py-24 overflow-hidden">
        <div className="absolute inset-0">
          <div className="absolute top-1/3 left-1/3 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-pulse"></div>
          <div className="absolute bottom-1/3 right-1/3 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-pulse delay-700"></div>
        </div>
        
        <div className="container mx-auto px-4 text-center relative z-10">
          <h1 className="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
            Our Professional Services
          </h1>
          <p className="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
            Comprehensive solutions to meet all your financial and business needs
          </p>
        </div>
      </section>

      {/* Services Grid */}
      <section className="py-20 bg-gray-50">
        <div className="container mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-8">
            {services.map((service, index) => (
              <div key={index} className="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div className="flex items-start space-x-6">
                  <div className={`w-16 h-16 bg-gradient-to-r ${service.color} rounded-xl flex items-center justify-center text-2xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300`}>
                    {service.icon}
                  </div>
                  <div className="flex-1">
                    <h3 className="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                      {service.title}
                    </h3>
                    <p className="text-gray-600 mb-4 leading-relaxed">{service.description}</p>
                    <ul className="space-y-2">
                      {service.features.map((feature, featureIndex) => (
                        <li key={featureIndex} className="flex items-center text-sm text-gray-600">
                          <div className="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                          {feature}
                        </li>
                      ))}
                    </ul>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Process Section */}
      <section className="py-20 bg-white">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Process</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              A systematic approach to deliver exceptional results
            </p>
          </div>
          
          <div className="grid md:grid-cols-4 gap-8">
            {[
              { step: "01", title: "Consultation", description: "Initial assessment of your needs" },
              { step: "02", title: "Planning", description: "Develop customized solution strategy" },
              { step: "03", title: "Execution", description: "Implement services with precision" },
              { step: "04", title: "Review", description: "Continuous monitoring and optimization" }
            ].map((item, index) => (
              <div key={index} className="text-center group">
                <div className="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                  {item.step}
                </div>
                <h3 className="text-xl font-bold text-gray-900 mb-2">{item.title}</h3>
                <p className="text-gray-600">{item.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-blue-800">
        <div className="container mx-auto px-4 text-center">
          <h2 className="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Get Started?
          </h2>
          <p className="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Contact us today to discuss how we can help your business achieve its goals
          </p>
          <Link 
            to="/contact"
            className="inline-block bg-white text-blue-800 px-10 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl"
          >
            Get Free Consultation
          </Link>
        </div>
      </section>
    </div>
  )
}

export default TermsOfServices