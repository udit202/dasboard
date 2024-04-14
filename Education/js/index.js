function container_switcher(j) {
    let block = document.getElementsByClassName(" data");
    i = 0;
    while (i < block.length) {
      block[i].style.display = 'none';
      block[j].style.display = 'inline-block';
      i++;
    }
  }
  container_switcher(0);