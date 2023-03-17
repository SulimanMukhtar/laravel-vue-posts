import{J as _,v,f as r,a as e,u as t,w as n,F as x,o as m,X as V,b as o,e as y,d as h,T as b,g}from"./app-2badef56.js";import{_ as d,a as c}from"./TextInput-7198ab1a.js";import{_ as k}from"./PrimaryButton-fb074cf8.js";import{_ as w}from"./AuthenticatedLayout-8e8af109.js";import"./ApplicationLogo-e9330942.js";const $=o("header",null,[o("h2",{class:"text-lg font-medium text-gray-900"},"Update a Hospital")],-1),N={class:"flex items-center gap-4"},S={key:0,class:"text-sm text-gray-600"},E={__name:"EditHospital",props:{hospital:Object},setup(u){const p=u,i=_().props.hospital,a=v({name:i.name,location:i.location});return(f,s)=>(m(),r(x,null,[e(t(V),{title:"Profile"}),e(w,null,{default:n(()=>[o("section",null,[$,o("form",{onSubmit:s[2]||(s[2]=y(l=>t(a).patch(f.route("hospital.update",{id:p.hospital.id})),["prevent"])),class:"mt-6 space-y-6"},[o("div",null,[e(d,{for:"name",value:"name"}),e(c,{id:"name",type:"text",class:"mt-1 block w-full",modelValue:t(a).name,"onUpdate:modelValue":s[0]||(s[0]=l=>t(a).name=l),required:"",autofocus:""},null,8,["modelValue"])]),o("div",null,[e(d,{for:"location",value:"location"}),e(c,{id:"location",type:"text",class:"mt-1 block w-full",modelValue:t(a).location,"onUpdate:modelValue":s[1]||(s[1]=l=>t(a).location=l),required:""},null,8,["modelValue"])]),o("div",N,[e(k,{disabled:t(a).processing},{default:n(()=>[h("Save")]),_:1},8,["disabled"]),e(b,{"enter-from-class":"opacity-0","leave-to-class":"opacity-0",class:"transition ease-in-out"},{default:n(()=>[t(a).recentlySuccessful?(m(),r("p",S,"Saved.")):g("",!0)]),_:1})])],32)])]),_:1})],64))}};export{E as default};