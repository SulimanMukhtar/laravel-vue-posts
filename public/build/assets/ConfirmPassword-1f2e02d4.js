import{v as m,g as l,w as t,o as d,a,u as o,X as c,b as e,e as p,n as f,d as u}from"./app-d1de9065.js";import{_}from"./GuestLayout-6564e9c5.js";import{_ as w}from"./InputError-59fac51c.js";import{_ as b,a as g}from"./TextInput-cce2d125.js";import{_ as h}from"./PrimaryButton-48efe694.js";import"./ApplicationLogo-722a1e22.js";const x=e("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),v=["onSubmit"],V={class:"flex justify-end mt-4"},T={__name:"ConfirmPassword",setup(y){const s=m({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(C,r)=>(d(),l(_,null,{default:t(()=>[a(o(c),{title:"Confirm Password"}),x,e("form",{onSubmit:u(i,["prevent"])},[e("div",null,[a(b,{for:"password",value:"Password"}),a(g,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":r[0]||(r[0]=n=>o(s).password=n),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),a(w,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),e("div",V,[a(h,{class:f(["ml-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:t(()=>[p(" Confirm ")]),_:1},8,["class","disabled"])])],40,v)]),_:1}))}};export{T as default};