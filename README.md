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
Our dev environment isn't too quirky, but our production environment is. Here I'll list what is necessary, followed by some tools I use that I recommend.

### Necessities
#### AMPPS
AMPPS. You need AMPPS. This lets you see what changes you're making will look like before you push them out to production. This may seem like a trivial or unimportant step, but let me assure you, it's not. It'll only take overwriting app.css and thereby triggering some confused and/or angry phone calls to and/or from Nancy **once** before you agree with me.

Nah that's a bit of a stretch, I have yet to see Nancy mad. Nonetheless, showing your users ineptitude is unprofessional. Don't put a change out on the live site that you haven't tested thoroughly beforehand.

So, what *is* AMPPS? It's a web application stack, preconfigured to work together. (A stack is the entire slew of separate tools used in a development process. What defines that process is up to you, so this term can be kinda flexible.)

It comes with the famed Apache web server, an installation of PHP (a very popular, albeit a bit dated, language used in web dev), MongoDB (a database software suite we shouldn't have to touch for this project), as well as a couple of other irrelevant things. 

The core of AMPPS' importance, though, is that it ties this all together for you. The AMPPS desktop app is how you should interface with each component. Don't go messing with individual configuration files for each app/language if you don't want to be promptly ignored by the whole of it.

For example, when I started setting this up, I wanted to be able to designate my own URLs for local instances of the projects (e.g. `careers.dev` would point to `localhost/.../career/dev/index.php`, `jobs.dev` to `localhost/.../career/jobs/dev/index.php`). I tried to open up Apache's `httpd.conf` and add a VirtualHost to it (if this process isn't immediately clear to you, don't feel pressured to google it, just something I like to do), and then became very frustrated when it didn't work as expected. This happened because AMPPS maintains its own `httpd.conf` for Apache that is not in the same location, and AMPPS overrides the actual Apache settings with its own. Be careful of this sort of thing.

#### Github
The code is in a private repository on Github. Familiarize yourself with git, or at least the Github app for your OS, and make regular commits. Do not make a change on the live site without having committed and pushed your changes first. Here's a good example arguing why:

I'm the only guy on the web dev team, as it's been for a bit, and I have been asked to make a change very quickly -- a Career Center is happening soon and we want to maximize its visibility by putting it on the home page. But soft! What malicious light through yonder monitor breaks! I forgot to actually test the change that I made before I pushed it over, and I had been working on a new page flow to the site before this sudden change request came in, and so I put a partial (read: broken) implementation live! Oh, foul fortune!

But nay! With git/Github, this is easy and quick to fix. Since I committed before I pushed this live, I can do a revert commit -- a new commit that undoes everything I've done since the previous commit. So I revert once, push live, and boom: all is well again. Peace. Serenity.

Now, it'd still be a bit of a bad spot, since I'd have just undone my partial implementation of the new page flow -- but it's a much better situation than leaving your wailing, half-baked fetus of a site lying around for everyone to vainly attempt to avert their eyes from.

#### Browsers
You need to have ready access to the Big Three on your workstation -- IE, Chrome, and Firefox. Anything beyond this is a nice bonus, but barely worth it.

I know, it sucks to dev for IE. But a significant portion of our users use IE 8-10, and you can't just ignore a demographic because you disagree with their habits. You are a serviceman (or servicewoman, I don't know). You build the best thing for your client or employer, which in this case means you build the best thing for their clients and users. This job has a lot of freedom to it. None of those freedoms allows that you may mandate that all University attendees use Chrome.

Do it right.

### Recommendations
#### Brackets
Brackets is basically an awesome text editor designed for web dev. It's got some neat capabilities, including live change mirroring -- you can set it up to boot Chrome with your local site instance (e.g. `careers.dev`), and then if you make any changes to the markup/stylesheet, those changes are IMMEDIATELY echoed into Chrome. This means you can stop forgetting to actually change your stylesheet because you started fiddling with Chrome's dev tools to see what really would look right and never wrote any changes to any files. It also has a lot of extensions that make it super, super handy. It's just really good for web dev.

#### Spotify
I listen to music when I work. Spotify is good for that. That is all.

## Production environment quirks
mallard v. mallard2 v. webserver
