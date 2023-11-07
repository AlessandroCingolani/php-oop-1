<?php

$media_list = [
  new Movie(new Media('img/nuovo-olimpo.webp', 'Copertina'),'Nuovo Olimpo','Ferzan Özpetek',['drammatico','sentimentale'],['Damiano Gavino','Andrea Di Luigi','Greta Scarano'],'italiano',2023,112),
  new TvSerie(new Media('img/stranger-things.webp', 'Copertina'),'Stranger Things',' Duffer Brothers',['drammatico','fantascienza','orrore','thriller'],['Sean Astin','Paul Reiser','Winona Ryder','David Harbour'],'inglese',2016,null,34,5),
  new TvSerie(new Media('img/one-piece.jpg', 'Copertina'),'One Piece','Eiichirō Oda',['shōnen'],['Monkey D. Rufy',' Roronoa Zoro','Nami'],'giapponese',1997,null,1082,20),
  new Movie(new Media(null, 'Copertina'),'The Wonderful Story of Henry Sugar','Wes Anderson',['drammatico','commedia','avventura'],['Benedict Cumberbatch','Ralph Fiennes','Dev Patel'],'inglese',2023,39),
  new Movie(new Media(null, 'Copertina'),'Pain Hustlers ','David Yates',['drammatico','poliziesco','thriller'],['Emily Blun','Chris Evans','Catherine O Hara'],'italiano',2023,122),
  new TvSerie(new Media(null, 'Copertina'),'The Umbrella Academy',' Steve Blackman',['commedia nera', 'drammatico', 'fantascienza','supereroi','fantastico'],['Elliot Page','Tom Hopper',' David Castañeda',' Emmy Raver-Lampman'],'inglese',2019,'Terminato',30,4)
];
