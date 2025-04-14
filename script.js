function buyBike(bikeName) {
  const phoneNumber = "9080799320"; // Replace with your WhatsApp number
  const message = `Hi! I'm interested in buying the ${bikeName}.`;
  const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
  window.open(url, '_blank');
}
