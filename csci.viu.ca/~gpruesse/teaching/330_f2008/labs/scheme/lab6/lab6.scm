;Scheme definition of operation that adds one to each element of a list:
(define add1 (lambda (l)
  (if (null? l) '()
      (cons (+ 1 (car l)) (add1 (cdr l))))))
; (add1 '(1 3 5 7)) --> (2 4 6 8)

; built-in operations on lists:
; (length '(a b c))  --> 3
; (append '(a b) '(c d)) --> (a b c d)
; (reverse '(a b c))  --> (c b a)
; (member 'a '(b c a d)) --> (a d) (#t with a little extra info).
; (map (lambda (x) (* x 2)) '(1 2 3 4))  -->  (2 4 6 8)
; consult Dave's Scheme Reference for set of built-ins


; binary trees
(define (node x l r)   ; x is data, l is left, r is right
  (lambda (s)
    (cond  ((= s 0) x)
           ((= s 1) l)
           ((= s 2) r)
           (#t 'error))))

(define (data t) (t 0))
(define (left t) (t 1))
(define (right t) (t 2))

; sample tree
(define t1 (node 5 (node 3 '() '()) (node 8 (node 7 '() '()) '())))

; Put your size, search and found? functions here


(define apply-to-all (lambda (F L) 
  (if (null? L) L (cons (F (car L)) (apply-to-all F (cdr L))))))
; (apply-to-all (lambda (x) (+ x 1)) '(1 2 3 4)) returns '(2 3 4 5)

; fold operator f over l, where f has identity id
(define (fold f l id) 
  (if (null? l) id
    (f (car l) (fold f (cdr l) id))))

; FYI: here's the fold function in C, adopted to zero-terminated vectors:
;int fold( int (*f)(int,int), int* l, int id)
;{
;   if (!l) return id; else return *f(l[0], fold(f,++l,id));
;}





