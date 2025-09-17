import React from 'react'

const Home = () => {
  return (
    <div>
      <section className="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div className="container mx-auto px-4 text-center">
          <h1 className="text-5xl font-bold mb-6">Professional Auditing Services</h1>
          <p className="text-xl mb-8">Trusted expertise for your business compliance and financial integrity</p>
          <button className="bg-white text-blue-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
            Get Started
          </button>
        </div>
      </section>
      
      <section className="py-16">
        <div className="container mx-auto px-4">
          <h2 className="text-3xl font-bold text-center mb-12">Our Services</h2>
          <div className="grid md:grid-cols-3 gap-8">
            <div className="text-center p-6 border rounded-lg shadow-lg">
              <h3 className="text-xl font-semibold mb-4">Financial Auditing</h3>
              <p>Comprehensive financial statement audits</p>
            </div>
            <div className="text-center p-6 border rounded-lg shadow-lg">
              <h3 className="text-xl font-semibold mb-4">Tax Services</h3>
              <p>Expert tax planning and compliance</p>
            </div>
            <div className="text-center p-6 border rounded-lg shadow-lg">
              <h3 className="text-xl font-semibold mb-4">Consulting</h3>
              <p>Strategic business consulting services</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}

export default Home