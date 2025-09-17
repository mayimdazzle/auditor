import React from 'react'

const About = () => {
  const values = [
    {
      icon: "🎯",
      title: "Integrity",
      description: "We maintain the highest ethical standards in all our professional relationships"
    },
    {
      icon: "🚀",
      title: "Excellence",
      description: "We strive for exceptional quality in every service we deliver"
    },
    {
      icon: "🤝",
      title: "Partnership",
      description: "We build long-term relationships based on trust and mutual success"
    },
    {
      icon: "💡",
      title: "Innovation",
      description: "We embrace modern solutions to address evolving business challenges"
    }
  ]

  const team = [
    {
      name: "Stalin Kumar",
      position: "Managing Partner",
      description: "Over 20 years of experience in auditing and financial consulting"
    },
    {
      name: "Expert Team",
      position: "Certified Professionals",
      description: "Highly qualified professionals with diverse industry expertise"
    }
  ]

  return (
    <div>
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 text-white py-24 overflow-hidden">
        <div className="absolute inset-0">
          <div className="absolute top-1/4 right-1/4 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-pulse"></div>
          <div className="absolute bottom-1/4 left-1/4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-pulse delay-700"></div>
        </div>
        
        <div className="container mx-auto px-4 text-center relative z-10">
          <h1 className="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
            About Stalin & Co., Auditors
          </h1>
          <p className="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
            Your trusted partner in financial excellence and business growth
          </p>
        </div>
      </section>

      {/* Story Section */}
      <section className="py-20 bg-white">
        <div className="container mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Story</h2>
              <p className="text-lg text-gray-600 mb-6 leading-relaxed">
                Established with a vision to provide exceptional auditing and financial services, 
                Stalin & Co., Auditors has grown to become a trusted partner for businesses 
                across various industries.
              </p>
              <p className="text-lg text-gray-600 mb-6 leading-relaxed">
                With over 15 years of experience in the field, our team of certified professionals 
                brings deep expertise in auditing, taxation, and business consulting. We are 
                committed to helping our clients achieve their financial goals while maintaining 
                the highest standards of compliance and integrity.
              </p>
              <p className="text-lg text-gray-600 leading-relaxed">
                Our approach combines traditional auditing excellence with modern technology 
                and innovative solutions, ensuring that our clients receive comprehensive 
                services tailored to their unique needs.
              </p>
            </div>
            <div className="relative">
              <div className="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8">
                <div className="text-center">
                  <div className="text-5xl mb-4">📊</div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4">Professional Excellence</h3>
                  <p className="text-gray-600">
                    Dedicated to delivering superior financial services with precision and integrity
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Values Section */}
      <section className="py-20 bg-gray-50">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Values</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              The principles that guide our work and define our character
            </p>
          </div>
          
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value, index) => (
              <div key={index} className="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                <div className="text-4xl mb-4">{value.icon}</div>
                <h3 className="text-xl font-bold text-gray-900 mb-3">{value.title}</h3>
                <p className="text-gray-600 leading-relaxed">{value.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Team Section */}
      <section className="py-20 bg-white">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Leadership</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Experienced professionals committed to your success
            </p>
          </div>
          
          <div className="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            {team.map((member, index) => (
              <div key={index} className="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300">
                <div className="w-20 h-20 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                  {member.name.charAt(0)}
                </div>
                <h3 className="text-2xl font-bold text-gray-900 mb-2">{member.name}</h3>
                <p className="text-blue-600 font-semibold mb-4">{member.position}</p>
                <p className="text-gray-600 leading-relaxed">{member.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Mission Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-blue-800">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto text-center">
            <h2 className="text-4xl md:text-5xl font-bold text-white mb-6">Our Mission</h2>
            <p className="text-xl text-blue-100 leading-relaxed">
              To empower businesses with reliable financial insights, expert guidance, and 
              innovative solutions that drive sustainable growth and ensure regulatory compliance. 
              We are committed to building lasting partnerships based on trust, integrity, 
              and exceptional service quality.
            </p>
          </div>
        </div>
      </section>
    </div>
  )
}

export default About