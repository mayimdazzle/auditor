import React from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

// Import your images
import Banner03 from "/images/Banner-03.jpg";
import Banner04 from "/images/Banner-04.jpg";
import ImgOne from "/images/img-one.jpg";

const Hero = () => {
    const slides = [
        {
            id: 1,
            image: Banner03,
            heading: "We Business Grow",
            sub: "We Help Your Business Innovate and Grow",
        },
        {
            id: 2,
            image: ImgOne,
            heading: "Trusted Partner",
            sub: "Delivering financial clarity and expert auditing",
        },
        {
            id: 3,
            image: Banner04,
            heading: "We Support Business",
            sub: "The Best Business Support with Integrity",
        },
    ];

    return (
        <div className="w-full">
            <Swiper
                modules={[Navigation, Pagination, Autoplay]}
                navigation
                pagination={{ clickable: true }}
                autoplay={{ delay: 3000 }}
                loop={true}
                className="w-full h-[80vh]"
            >
                {slides.map((slide) => (
                    <SwiperSlide key={slide.id}>
                        <div
                            style={{
                                backgroundImage: `url(${slide.image})`,
                                backgroundSize: "contain",
                                backgroundRepeat: "no-repeat",
                                backgroundPosition: "center",
                                height: "80vh",
                                position: "relative",
                                display: "flex",
                                justifyContent: "center",
                                alignItems: "center",
                                color: "#fff",
                            }}
                        >
                            {/* Overlay */}
                            <div
                                style={{
                                    position: "absolute",
                                    top: 0,
                                    left: 0,
                                    width: "100%",
                                    height: "100%",
                                    backgroundColor: "rgba(0,0,0,0.5)", // 80% dark overlay
                                    zIndex: 1,
                                }}
                            ></div>

                            {/* Text */}
                            <div
                                style={{ position: "relative", zIndex: 2, textAlign: "center" }}
                            >
                                <h1 className="text-4xl md:text-6xl font-bold mb-4">{slide.heading}</h1>
                                <p className="text-lg md:text-2xl max-w-2xl">{slide.sub}</p>
                            </div>
                        </div>
                    </SwiperSlide>

                ))}
            </Swiper>
        </div>
    );
};

export default Hero;
