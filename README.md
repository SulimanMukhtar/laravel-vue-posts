
# Laravel Inertia - Vue

applying Laravel Policies.

theres 3 User/Role types .

all users are provided from the Seeder

### Super Admin  (id === 0) 
```bash
email : superAdmin@superadmin.com
```
```bash
pass : password
```

### Admin (id === 1)
```bash
email : admin@superadmin.com
```
```bash
pass : password
```

### User (id === 2)
```bash
email : user@user.com
```
```bash
pass : password
```



### the User can't update or delete Anything ... only view the records .

### the Admin can only Update all except the Hospitals .

### The Super Admin can do all .

