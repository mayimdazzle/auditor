import React from 'react'

const Services = () => {
  const services = [
    {
      title: "Financial Auditing",
      description: "Comprehensive financial statement audits to ensure accuracy and compliance"
    },
    {
      title: "Tax Services", 
      description: "Expert tax planning, preparation, and compliance services"
    },
    {
      title: "Business Consulting",
      description: "Strategic business consulting to help optimize your operations"
    },
    {
      title: "GST Services",
      description: "Complete GST registration, filing, and compliance services"
    }
  ]

  return (
    <div className="py-16">
      <div className="container mx-auto px-4">
        <h1 className="text-4xl font-bold text-center mb-12">Our Services</h1>
        <div className="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
          {services.map((service, index) => (
            <div key={index} className="p-6 border rounded-lg shadow-lg hover:shadow-xl transition-shadow">
              <h3 className="text-xl font-semibold mb-4 text-blue-800">{service.title}</h3>
              <p className="text-gray-600">{service.description}</p>
            </div>
          ))}
        </div>
      </div>
    </div>
  )
}

export default Services