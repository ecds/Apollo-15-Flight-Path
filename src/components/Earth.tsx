const Earth = () => {
  return (
    <image
      className="earth show on-earth"
      transform={`translate(${332} ${115}) scale(${0.3})`}
      width={932}
      height={932}
      xlinkHref="/images/earth.png"
    ></image>
  );
};

export default Earth;
