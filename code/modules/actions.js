document.addEventListener("mouseover", (e) => {
    if (e.target.tagName == "BUTTON") {
      e.target.className = "hovered"
    } else {
      document.querySelectorAll("button").forEach((b) => {
        b.className = ""
      })
    }
  })