clock_t start;
start = clock();

minheap ReadyToLex(n);

// Give all elements with no upper covers lex # = 0

   vector<int>::iterator it;
   vector<int>::iterator b;
   bool nobump;
   int next;

   for (u=0; u<n; u++) 
      if (numUpperCovers[u]==0) {
            ReadyToLex.insert(LexCovers[u],u);
      }
   
   
   maxlex=0;
   while (!ReadyToLex.isEmpty())  {
      u= ReadyToLex.deleteMin(); 
      lex[u]=maxlex++;
      //cout << "lex["<<u<<"]= "<<lex[u] << "\n";



      for (it=LowerCover[u].begin(); it!=LowerCover[u].end(); it++) {
         LexCovers[*it].push_front(lex[u]);
         numUpperCovers[*it]--;
         if (numUpperCovers[*it]==0) {
             ReadyToLex.insert(LexCovers[*it], *it);
         }
      }

   }


   int bump = 0;
   heap H(n);
   for (int i = 0; i< n; i++) 
      if (numLowerCovers[i]== 0) {
         //cout << "inserting "<<i<<" into H\n";
         H.insert(lex[i],i);
      }
      
   u = H.deleteMax();
   for (int i=1; i<n; i++) {
      nobump = false;
      cout << u <<"("<<lex[u]<<")";
      if (!H.isEmpty()) { // no bump 
         nobump=true;
         next = H.deleteMax();
         cout << "  ";
      }
      for (it=UpperCover[u].begin(); it!=UpperCover[u].end(); it++) {
         numLowerCovers[*it]--;
         if (numLowerCovers[*it]==0)
             H.insert(lex[*it], *it);
         }
      if (!nobump) { // take the bump, and get next from the heap
         u = H.deleteMax();
         bump++;
         cout << "--";
      }
      else {  // no bump, the next was already in the heap
         u = next;
      }
   }

   cout << u <<"("<<lex[u]<<")\nbump number is "<< bump<< endl;

 cout << "Time: "<< (clock() - start)/(double(CLOCKS_PER_SEC/1000))<< endl;


return 0;
   
}



