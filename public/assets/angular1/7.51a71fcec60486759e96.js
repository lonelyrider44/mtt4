(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{ZWFR:function(t,e,r){"use strict";r.r(e),r.d(e,"KnjigaModule",(function(){return k}));var i=r("ofXK"),n=r("tyNb"),a=r("fXoL");let s=(()=>{class t{constructor(){}ngOnInit(){}}return t.\u0275fac=function(e){return new(e||t)},t.\u0275cmp=a.Bb({type:t,selectors:[["app-details"]],decls:2,vars:0,template:function(t,e){1&t&&(a.Kb(0,"p"),a.bc(1,"details works!"),a.Jb())},styles:[""]}),t})();var o=r("3Pt+"),c=r("tk/3"),b=r("z6cu"),l=r("JIr8");let d=(()=>{class t{constructor(t){this.httpClient=t,this.apiServer="/api",this.httpOptions={headers:new c.d({"Content-Type":"application/json"})}}create(t){return this.httpClient.post(this.apiServer+"/knjiga",JSON.stringify(t),this.httpOptions)}getById(t){return this.httpClient.get(this.apiServer+"/knjiga/"+t).pipe(Object(l.a)(this.errorHandler))}getAll(){return this.httpClient.get(this.apiServer+"/knjiga").pipe(Object(l.a)(this.errorHandler))}update(t,e){return this.httpClient.put(this.apiServer+"/knjiga/"+t,JSON.stringify(e),this.httpOptions)}delete(t){return this.httpClient.delete(this.apiServer+"/knjiga/"+t,this.httpOptions).pipe(Object(l.a)(this.errorHandler))}errorHandler(t){let e="";return e=t.error instanceof ErrorEvent?t.error.message:`Error Code: ${t.status}\nMessage: ${t.message}`,Object(b.a)(e)}}return t.\u0275fac=function(e){return new(e||t)(a.Ob(c.b))},t.\u0275prov=a.Db({token:t,factory:t.\u0275fac,providedIn:"root"}),t})();function p(t,e){if(1&t&&(a.Kb(0,"div",12),a.Kb(1,"small"),a.bc(2),a.Jb(),a.Jb()),2&t){const t=a.Tb();a.xb(2),a.cc(t.errors.naziv)}}function u(t,e){1&t&&(a.Kb(0,"button",13),a.bc(1,"Submit"),a.Jb())}function h(t,e){1&t&&(a.Kb(0,"button",14),a.bc(1,"Delete"),a.Jb())}const g=function(t){return{"is-invalid":t}};let m=(()=>{class t{constructor(t,e,r,i){this.fb=t,this.router=e,this.activatedRoute=r,this.knjigaService=i,this.knjiga={id:null,naziv:""},this.errors=[],this.action=""}ngOnInit(){this.action=this.activatedRoute.snapshot.url[0].path,this.activatedRoute.snapshot.url[1]&&this.knjigaService.getById(this.activatedRoute.snapshot.url[1].path).subscribe(t=>{this.knjiga=t}),this.knjigaForm=this.fb.group({naziv:[""]})}submitForm(){switch(this.action){case"create":this.knjigaService.create(this.knjigaForm.value).subscribe({next:t=>{this.router.navigateByUrl("/knjige/home")},error:t=>{this.errors=t.error.errors}});break;case"update":this.knjigaService.update(this.knjiga.id,this.knjigaForm.value).subscribe({next:t=>{this.router.navigateByUrl("/knjige/home")},error:t=>{this.errors=t.error.errors}});break;case"delete":this.knjigaService.delete(this.knjiga.id).subscribe({next:t=>{this.router.navigateByUrl("/knjige/home")},error:t=>{this.errors=t.error.errors}})}}}return t.\u0275fac=function(e){return new(e||t)(a.Hb(o.b),a.Hb(n.f),a.Hb(n.a),a.Hb(d))},t.\u0275cmp=a.Bb({type:t,selectors:[["app-form"]],decls:14,vars:8,consts:[[1,"card","card-primary"],[1,"card-header"],[1,"card-title"],["novalidate","",3,"formGroup","ngSubmit"],[1,"card-body"],[1,"form-group"],["for","exampleInputEmail1"],["type","text","id","exampleInputEmail1","placeholder","Naziv","formControlName","naziv",1,"form-control","form-control-border",3,"ngClass","ngModel"],["class","text-danger",4,"ngIf"],[1,"card-footer"],["type","submit","class","btn btn-primary",4,"ngIf"],["type","submit","class","btn btn-danger",4,"ngIf"],[1,"text-danger"],["type","submit",1,"btn","btn-primary"],["type","submit",1,"btn","btn-danger"]],template:function(t,e){1&t&&(a.Kb(0,"div",0),a.Kb(1,"div",1),a.Kb(2,"h3",2),a.bc(3,"Knjiga"),a.Jb(),a.Jb(),a.Kb(4,"form",3),a.Rb("ngSubmit",(function(){return e.submitForm()})),a.Kb(5,"div",4),a.Kb(6,"div",5),a.Kb(7,"label",6),a.bc(8,"Naziv"),a.Jb(),a.Ib(9,"input",7),a.Jb(),a.ac(10,p,3,1,"div",8),a.Jb(),a.Kb(11,"div",9),a.ac(12,u,2,0,"button",10),a.ac(13,h,2,0,"button",11),a.Jb(),a.Jb(),a.Jb()),2&t&&(a.xb(4),a.Ub("formGroup",e.knjigaForm),a.xb(5),a.Ub("ngClass",a.Vb(6,g,e.errors.naziv))("ngModel",e.knjiga.naziv),a.xb(1),a.Ub("ngIf",e.errors.naziv),a.xb(2),a.Ub("ngIf","delete"!=e.action),a.xb(1),a.Ub("ngIf","delete"==e.action))},directives:[o.n,o.h,o.d,o.a,o.g,o.c,i.h,i.j],styles:[""]}),t})();const f=["dataTableKnjige"],v=[{path:"",redirectTo:"home",pathMatch:"full"},{path:"home",component:(()=>{class t{constructor(t,e){this.knjigaService=t,this.router=e,this.mesta=[]}ngOnInit(){}ngAfterViewInit(){const t=this;this.dataTable=$(this.table.nativeElement),this.dataTable.DataTable({ajax:(t,e)=>{this.knjigaService.getAll().subscribe(t=>{e({recordsTotal:t.recordsTotal,recordsFiltered:t.recordsFiltered,data:t.data})})},responsive:!0,autoWidth:!1,buttons:{buttons:[{text:'<i class="fas fa-plus"></i>',action:function(e,r,i,n){t.router.navigateByUrl("/knjige/create")},className:"btn btn-primary"},"copy","csv","excel",{extend:"pdfHtml5",text:"Export PDF",orientation:"landscape",customize:function(t){var e=new Array;$("#datatable_knjige").find("tbody tr:first-child td").each((function(){if($(this).attr("colspan"))for(var t=1;t<=$(this).attr("colspan");t++)e.push("*");else e.push("*")})),t.content[1].table.widths=e}},"print","colvis"],dom:{button:{className:"btn"}}},dom:"Bfrtip",columns:[{title:"ID",data:"id",name:"id"},{title:"Naziv",data:"naziv",name:"naziv"},{title:"Akcije",data:"action",name:"action",width:"10%"}],drawCallback:function(){$(".btnEditKnjiga").on("click",(function(){t.router.navigateByUrl("/knjige/update/"+$(this).data("id"))})),$(".btnRemoveKnjiga").on("click",(function(){t.router.navigateByUrl("/knjige/delete/"+$(this).data("id"))}))}}).buttons().container().appendTo("#datatable_knjige_wrapper .col-md-6:eq(0)")}}return t.\u0275fac=function(e){return new(e||t)(a.Hb(d),a.Hb(n.f))},t.\u0275cmp=a.Bb({type:t,selectors:[["app-index"]],viewQuery:function(t,e){var r;1&t&&a.dc(f,!0),2&t&&a.Wb(r=a.Sb())&&(e.table=r.first)},decls:3,vars:0,consts:[["id","datatable_knjige",1,"table","table-bordered","table-striped","table-sm"],["dataTableKnjige",""]],template:function(t,e){1&t&&(a.Kb(0,"div"),a.Ib(1,"table",0,1),a.Jb())},styles:[""]}),t})()},{path:"details/:id",component:s},{path:"create",component:m},{path:"update/:id",component:m},{path:"delete/:id",component:m}];let j=(()=>{class t{}return t.\u0275mod=a.Fb({type:t}),t.\u0275inj=a.Eb({factory:function(e){return new(e||t)},imports:[[n.j.forChild(v)],n.j]}),t})(),k=(()=>{class t{}return t.\u0275mod=a.Fb({type:t}),t.\u0275inj=a.Eb({factory:function(e){return new(e||t)},imports:[[i.b,j,c.c,o.e,o.k]]}),t})()}}]);