function validate() {
  let opt = document.getElementsByClassName("opt");
  let nameid = document.getElementById('nameid');
  let charid = document.getElementById('charid');
  let soulid = document.getElementById('soulid');
  let final = document.getElementById('final');
  let sum = 0;

  for(let i=0; i<opt.length; i++) {
    if(opt[i].checked == true) {
      sum += parseInt(opt[i].value);
    } 
  }

  if(sum >= 100 && sum <= 160) {
    soulid.innerHTML = '*** FIRE ***';
    charid.innerHTML = 'bright, charm, romantic, passionate, attitude, and anger';
  } else if(sum >= 170 && sum <= 240) {
    soulid.innerHTML = '*** AIR ***';
    charid.innerHTML = 'love, adventure, independent, irresponsible, correct, sensitive, dishonest, and selfish';
  } else if (sum >= 250 && sum <= 320) {
    soulid.innerHTML = '*** WATER ***';
    charid.innerHTML = 'peace, easy going, trust, understand, little lazy, and pessimist';
  } else if (sum >= 330 && sum <= 400) {
    soulid.innerHTML = '*** EARTH ***';
    charid.innerHTML = 'empathetic, loyal, hardwork, think, creative, and leader'
  } else {
    soulid.innerHTML = 'invalid !!!..';
    charid.innerHTML = 'there is a mistake in your data, answer each and every question.'
  }

  nameid.innerHTML = `Thank You ${name} !..`;

  final.style.display = 'block';

  return false;
}