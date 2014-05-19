careers
=======

Auburn University Career Center websites.

## Project introduction
Here at the Career Center, you'll be doing work on THREE (3) different web sites:

- Career Center Home
- Jobs Home
- Hire Home

We have some inconsistencies in how things are named now and how they will be named, as well.
For example:

1. There is a file in careers/jobs/ named index.html. However, this is NOT the jobs home. The jobs home is being redesigned, and while current LIVE version exists at careers/jobs/index.php, the current DEV version exists at careers/laravel/public/jobs.blade.php.
2. The Career Center site exists on mallard at /export/vol2/httpd/htdocs/career, but our repository name is careers. This is easy to mix up.
3. Most of our work will be done in careers/laravel/, but there is a TON of other stuff out there. This would require serious effort to overhaul and may not be worth it.
4. Hire.dev doesn't exist yet.


### Career Center Home
*Aliases: career.dev, career, career home, the home page*

The Career Center Home is the site that describes the physical office of the Career Center. It's also home to TONS of resource links.

### Jobs Home
*Aliases: jobs.dev, jobs, jobs.auburn, the jobs home page*

The Jobs home page is a portal site into a multitude of job-searching apps and resources, but primarily it's (currently) used to log in to TRL. This will eventually be de-emphasized contextually based on what the user is likely to need (TRL is a better resource for engineers, but a bad resource for liberal arts majors).

### Hire Home
*Aliases: hire.dev, hire, hire.auburn, the hire home page*

The hire.auburn site is a portal into a multitude of job-posting apps and resources, and is primarily used by potential employers to advertise their openings to soon-to-be grads. 

## Development environment configuration
AMPPS v. Apache httpd.conf files


## Production environment quirks
mallard v. mallard2 v. webserver
