(window.webpackJsonp=window.webpackJsonp||[]).push([[6],{kiSR:function(t,e,a){"use strict";a.r(e),a.d(e,"IzdavacModule",(function(){return y}));var r=a("ofXK"),i=a("tyNb"),n=a("fXoL");let s=(()=>{class t{constructor(){}ngOnInit(){}}return t.\u0275fac=function(e){return new(e||t)},t.\u0275cmp=n.Bb({type:t,selectors:[["app-details"]],decls:2,vars:0,template:function(t,e){1&t&&(n.Kb(0,"p"),n.bc(1,"details works!"),n.Jb())},styles:[""]}),t})();var o=a("3Pt+"),c=a("tk/3"),d=a("z6cu"),b=a("JIr8");let l=(()=>{class t{constructor(t){this.httpClient=t,this.apiServer="/api",this.httpOptions={headers:new c.d({"Content-Type":"application/json"})}}create(t){return this.httpClient.post(this.apiServer+"/izdavac",JSON.stringify(t),this.httpOptions)}getById(t){return this.httpClient.get(this.apiServer+"/izdavac/"+t).pipe(Object(b.a)(this.errorHandler))}getAll(){return this.httpClient.get(this.apiServer+"/izdavac").pipe(Object(b.a)(this.errorHandler))}update(t,e){return this.httpClient.put(this.apiServer+"/izdavac/"+t,JSON.stringify(e),this.httpOptions)}delete(t){return this.httpClient.delete(this.apiServer+"/izdavac/"+t,this.httpOptions).pipe(Object(b.a)(this.errorHandler))}errorHandler(t){let e="";return e=t.error instanceof ErrorEvent?t.error.message:`Error Code: ${t.status}\nMessage: ${t.message}`,Object(d.a)(e)}}return t.\u0275fac=function(e){return new(e||t)(n.Ob(c.b))},t.\u0275prov=n.Db({token:t,factory:t.\u0275fac,providedIn:"root"}),t})();function p(t,e){if(1&t&&(n.Kb(0,"div",12),n.Kb(1,"small"),n.bc(2),n.Jb(),n.Jb()),2&t){const t=n.Tb();n.xb(2),n.cc(t.errors.naziv)}}function u(t,e){1&t&&(n.Kb(0,"button",13),n.bc(1,"Submit"),n.Jb())}function h(t,e){1&t&&(n.Kb(0,"button",14),n.bc(1,"Delete"),n.Jb())}const v=function(t){return{"is-invalid":t}};let m=(()=>{class t{constructor(t,e,a,r){this.fb=t,this.router=e,this.activatedRoute=a,this.izdavacService=r,this.izdavac={id:null,naziv:""},this.errors=[],this.action=""}ngOnInit(){this.action=this.activatedRoute.snapshot.url[0].path,this.activatedRoute.snapshot.url[1]&&this.izdavacService.getById(this.activatedRoute.snapshot.url[1].path).subscribe(t=>{this.izdavac=t}),this.izdavacForm=this.fb.group({naziv:[""]})}submitForm(){switch(this.action){case"create":this.izdavacService.create(this.izdavacForm.value).subscribe({next:t=>{this.router.navigateByUrl("/izdavaci/home")},error:t=>{this.errors=t.error.errors}});break;case"update":this.izdavacService.update(this.izdavac.id,this.izdavacForm.value).subscribe({next:t=>{this.router.navigateByUrl("/izdavaci/home")},error:t=>{this.errors=t.error.errors}});break;case"delete":this.izdavacService.delete(this.izdavac.id).subscribe({next:t=>{this.router.navigateByUrl("/izdavaci/home")},error:t=>{this.errors=t.error.errors}})}}}return t.\u0275fac=function(e){return new(e||t)(n.Hb(o.b),n.Hb(i.f),n.Hb(i.a),n.Hb(l))},t.\u0275cmp=n.Bb({type:t,selectors:[["app-form"]],decls:14,vars:8,consts:[[1,"card","card-primary"],[1,"card-header"],[1,"card-title"],["novalidate","",3,"formGroup","ngSubmit"],[1,"card-body"],[1,"form-group"],["for","exampleInputEmail1"],["type","text","id","exampleInputEmail1","placeholder","Naziv","formControlName","naziv",1,"form-control","form-control-border",3,"ngClass","ngModel"],["class","text-danger",4,"ngIf"],[1,"card-footer"],["type","submit","class","btn btn-primary",4,"ngIf"],["type","submit","class","btn btn-danger",4,"ngIf"],[1,"text-danger"],["type","submit",1,"btn","btn-primary"],["type","submit",1,"btn","btn-danger"]],template:function(t,e){1&t&&(n.Kb(0,"div",0),n.Kb(1,"div",1),n.Kb(2,"h3",2),n.bc(3,"Izdava\u010d"),n.Jb(),n.Jb(),n.Kb(4,"form",3),n.Rb("ngSubmit",(function(){return e.submitForm()})),n.Kb(5,"div",4),n.Kb(6,"div",5),n.Kb(7,"label",6),n.bc(8,"Naziv"),n.Jb(),n.Ib(9,"input",7),n.Jb(),n.ac(10,p,3,1,"div",8),n.Jb(),n.Kb(11,"div",9),n.ac(12,u,2,0,"button",10),n.ac(13,h,2,0,"button",11),n.Jb(),n.Jb(),n.Jb()),2&t&&(n.xb(4),n.Ub("formGroup",e.izdavacForm),n.xb(5),n.Ub("ngClass",n.Vb(6,v,e.errors.naziv))("ngModel",e.izdavac.naziv),n.xb(1),n.Ub("ngIf",e.errors.naziv),n.xb(2),n.Ub("ngIf","delete"!=e.action),n.xb(1),n.Ub("ngIf","delete"==e.action))},directives:[o.n,o.h,o.d,o.a,o.g,o.c,r.h,r.j],styles:[""]}),t})();const f=["dataTableIzdavaci"],z=[{path:"",redirectTo:"home",pathMatch:"full"},{path:"home",component:(()=>{class t{constructor(t,e){this.izdavacService=t,this.router=e,this.izdavaci=[]}ngOnInit(){}ngAfterViewInit(){const t=this;this.dataTable=$(this.table.nativeElement),this.dataTable.DataTable({ajax:(t,e)=>{this.izdavacService.getAll().subscribe(t=>{e({recordsTotal:t.recordsTotal,recordsFiltered:t.recordsFiltered,data:t.data})})},responsive:!0,autoWidth:!1,buttons:{buttons:[{text:'<i class="fas fa-plus"></i>',action:function(e,a,r,i){t.router.navigateByUrl("/izdavaci/create")},className:"btn btn-primary"},"copy","csv","excel",{extend:"pdfHtml5",text:"Export PDF",orientation:"landscape",customize:function(t){var e=new Array;$("#datatable_izdavaci").find("tbody tr:first-child td").each((function(){if($(this).attr("colspan"))for(var t=1;t<=$(this).attr("colspan");t++)e.push("*");else e.push("*")})),t.content[1].table.widths=e}},"print","colvis"],dom:{button:{className:"btn"}}},dom:"Bfrtip",columns:[{title:"ID",data:"id",name:"id"},{title:"Naziv",data:"naziv",name:"naziv"},{title:"Akcije",data:"action",name:"action",width:"10%"}],drawCallback:function(){$(".btnEditIzdavac").on("click",(function(){t.router.navigateByUrl("/izdavaci/update/"+$(this).data("id"))})),$(".btnRemoveIzdavac").on("click",(function(){t.router.navigateByUrl("/izdavaci/delete/"+$(this).data("id"))}))}}).buttons().container().appendTo("#datatable_mesta_wrapper .col-md-6:eq(0)")}}return t.\u0275fac=function(e){return new(e||t)(n.Hb(l),n.Hb(i.f))},t.\u0275cmp=n.Bb({type:t,selectors:[["app-index"]],viewQuery:function(t,e){var a;1&t&&n.dc(f,!0),2&t&&n.Wb(a=n.Sb())&&(e.table=a.first)},decls:3,vars:0,consts:[["id","datatable_izdavaci",1,"table","table-bordered","table-striped","table-sm"],["dataTableIzdavaci",""]],template:function(t,e){1&t&&(n.Kb(0,"div"),n.Ib(1,"table",0,1),n.Jb())},styles:[""]}),t})()},{path:"details/:id",component:s},{path:"create",component:m},{path:"update/:id",component:m},{path:"delete/:id",component:m}];let g=(()=>{class t{}return t.\u0275mod=n.Fb({type:t}),t.\u0275inj=n.Eb({factory:function(e){return new(e||t)},imports:[[i.j.forChild(z)],i.j]}),t})(),y=(()=>{class t{}return t.\u0275mod=n.Fb({type:t}),t.\u0275inj=n.Eb({factory:function(e){return new(e||t)},imports:[[r.b,g,c.c,o.e,o.k]]}),t})()}}]);