parent(quinn,adam).
parent(alice,adam).
parent(quinn,suzie).
parent(alice,suzie).
parent(ted,lester).
parent(ted,ada).
parent(mona,frank).
parent(mona,ada).
parent(liz,frank).
parent(pete,frank).
parent(pete,gigi).
parent(liz,ada).
parent(chester,tobias).
parent(lulu,tobias).
parent(chester,finn).
parent(lulu,finn).
parent(jade,quinn).
parent(spot,quinn).
parent(niko,alice).
parent(desiree,alice).
parent(desiree,ted).
parent(spot,mona).
parent(ned,mona).
parent(ned,chester).
parent(fluffy,liz).
parent(opta,pete).
parent(karen,pete).
parent(fluffy,chester).
parent(flopsy,chester).
parent(karen,lulu).
parent(opta,desiree).
parent(niko,ned).
parent(steve,ned).
parent(flopsy,karen).
parent(stumpy, niko).
parent(stumpy, spot).
parent(wendy, spot).
parent(nick,opta).
parent(steve,fluffy).
parent(jade, stumpy).
parent(lola,steve).
parent(lola,flopsy).
parent(wendy,nick).

female(suzie).
female(ada).
female(gigi).
female(finn).
female(lulu).
female(liz).
female(alice).
female(mona).
female(karen).
female(desiree).
female(niko).
female(flopsy).
female(stumpy).
female(fluffy).
female(opta).

not(X):- \+X.

coparents(P1, P2, Child):- parent(Child,P1),
     	parent(Child,P2), P1\==P2.


