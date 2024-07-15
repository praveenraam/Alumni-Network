# Alumni Network

## 1. Introduction : 

#### 1.1 Purpose :

 The Alumni Network Platform project aims to establish a central hub bridging alumni and current students for upskilling and career opportunities within the university community. By fostering connections and mentorship, it facilitates seamless access to resources and industry insights tailored to student needs.

#### 1.2 Product Scope :

 The project entails developing a web-based platform to facilitate meaningful connections between alumni and students, offering avenues for mentorship and career advancement. By providing a digital space for networking and collaboration, it aims to empower both parties to exchange knowledge, guidance, and opportunities within the university community.
  
#### 1.3 Product value :

The alumni network platform cultivates an immersive ecosystem that nurtures career advancement, facilitates networking opportunities, promotes knowledge exchange, and cultivates a cohesive community ethos across students, alumni, and the institution.

#### 1.4 Intended use :

Current students will leverage the alumni network platform as a comprehensive resource hub, tapping into mentorship avenues, career prospects, diverse professional development materials, and valuable networking connections with seasoned alumni to enhance their academic and professional journey.

## 2. Breakdown of Requirement :               

The objective is to create a robust alumni network that fosters connections and supports career development

- Enable students to connect with alumni for mentoring and networking opportunities.
    
- Allow students to request alumni mentorship during their academic journey.
    
- Facilitate alumni in posting job and internship openings for current students.
    
- Provide a directory of alumni for reference purposes.
    
- Allow coordinators to request alumni to conduct seminars and webinars.
    
- Implement an event calendar for registering for events, webinars, and seminars.
    
- Enable both alumni and students to share news articles relevant to the community.

#### 2.1 Description :

Build an alumni network platform where alumni can connect with each other, mentor current students and share job opportunities. Include features like alumni directories, events calendars, and news updates.

## 3. Key Features : 

#### 3.1 Alumni Mentoring:

The platform empowers alumni to engage actively in mentoring current students, fostering a symbiotic relationship where mentors assign tasks to mentees regularly. Through structured mentorship programs facilitated by the platform.

#### 3.2 Job Openings:

By enabling alumni to post positions directly The platform provides alumni with a streamlined mechanism to share job and internship openings, effectively bridging the gap between alumni networks and current students seeking career opportunities.

#### 3.3 News Articles:

The platform facilitates the sharing of news articles within the community, ensuring students stay updated on the latest technology trends and industry developments, empowering them to make informed decisions about their academic and professional pursuits.

#### 3.4 Event Calendaring:

The platform implements an intuitive event calendar feature, enabling seamless scheduling and registration for webinars and seminars organized by alumni. This functionality enhances engagement by providing students with convenient access to valuable learning opportunities.

#### 3.5 Alumni Directory:

The platform offers comprehensive profiles of alumni, detailing their current work status, past experiences, and specific fields of expertise. This detailed information equips students with valuable insights into alumni career trajectories, enabling them to identify mentors and connect with professionals in their desired fields.

## 4. Stack Architecture and Infrastructure:

|           |                                                     |
| --------- | --------------------------------------------------- |
| Hosting   | Cloud hosting (e.g. AWS) on Linux VMs or containers |
| Database  | MySQL (RDMS) for structured data.                   |
| Front-end | HTML , CSS , JavaScript , technologies              |
| Back-end  | PHP, Frameworks (Laravel), RESTful APIs             |

  

## 5. Operational Specifications

#### 5.1 Users Management :

- Students
    
- Alumnus
    
- Admin

#### 5.2 Mentoring :

- Students can give request to Alumni to accept him as mentor
    
- The alumni can either reject or accept , incase of reject student should request someone else
    
- The Mentees are assigned with the tasks regularly
    
- The result of the task completion should be updated by the student after the completion of the task daily

#### 5.3 Job Opportunities :

- The Alumnus will add about the job vacancies in their surrounding and all are listed
    
- Internships can also be added
    
- Students who are all interested to apply, can apply

#### 5.4 Event Calendering :

- The Admin makes a request to the Alumnus to present a seminar or webinar or an event on a certain topic.
    
- Incase a alumni interested to take the event , he accepts and he will be the in charge for the Event
    
- Students who are interested can register for the event, The further details of the events are sent to the user automatically through notification

#### 5.5 News Feed :

- The Alumnus and Admin can post current news on their field of work.
    
- Students will be benefited with the current technology news on interest fields
    
- Students can customize their Feed page with mute option
    
- The news feed will be a scroll page.

## 6. Dependencies

#### 6.1 Google Authentication (Google Auth) :

This dependency includes ensuring seamless integration with Google's authentication services, such as OAuth, to allow users to securely log in using their Google accounts.

#### 6.2 Proper Working and Performance of the Database:

This includes designing an efficient database schema to store user data, events, news articles, job postings, and other relevant information. The database should be optimized for fast retrieval and storage of data to ensure smooth performance of the platform,

#### 6.3 Proper Hosting:

This includes selecting a hosting provider that offers sufficient resources, scalability, and reliability to support the expected traffic and usage patterns of the platform. The hosting environment should also provide adequate security measures to protect user data and prevent unauthorized access

## 7. Use Case Diagram

![](https://lh7-us.googleusercontent.com/docsz/AD_4nXc0z7YnMZa0N5d1eMGm7z3cYd5gtnz88tK6Y4ooW7miNAHdr91ETZ4HL-h43Kwo-aJaveCDPOW2TU6VZ-VVwLJAyW9zsOj5FOXDW3IlkhJs06iqa8d0uynN53CzXXTRqpj2j25s616_GG7oDs6FCA4q6-qA?key=YUpbXc1jJiSm8V2Y8hvaAQ)

## 8. Website Flow 

The flowchart illustrates the navigation paths of different user types within the website, outlining their respective permissions and tasks. It delineates the sequence of actions users will experience, detailing the jobs they are authorized to perform on the platform.

#### 8.1 Alumni - Website Flow 
  

![](https://lh7-us.googleusercontent.com/docsz/AD_4nXf_7fStsQZvTqZItbN3Vh4HGRAA3PNS9MKBNYTto-ueCZIDx82ezr-tdgPP8fc2YikxEj0z6Z-hC5baO2WSRUkssNzBVCBtmtP9Q2E-vJbSuYIRagOU5Pycd65ML_9OAwJBq12p_KUoJQ4_Fqrv1g2iqBk?key=YUpbXc1jJiSm8V2Y8hvaAQ)

  
  

#### 8.2 Student - Website Flow 

![](https://lh7-us.googleusercontent.com/docsz/AD_4nXc-12LFSwM2i7xAQs79efJ2vOkATGCETuBvHzpr9hRKkpSfwVVSRM6C8-SrgJAVTDVLVqWzqpRbvHF0ksF45yZO2S8tUdFH0I7kVczHgcD-7L5WFZSq14VdFZFzObY-scBtWdw-6lZ0E98FRdeoBrcLz8dY?key=YUpbXc1jJiSm8V2Y8hvaAQ)

#### 8.3 Admin - Website Flow 

![](https://lh7-us.googleusercontent.com/docsz/AD_4nXdNeynC48Qds2qb-Z5y_l2IW9uRAC8CqO0giihyLdwMLkGOqtcHqlVYpvyMHGoT0fvqiZWj7ExgKTwvsefEm1IIZ1tcJZOltXcZ57YPWNgIH1xouSiAYJ4e-GSIjvXQ7KWrxLyz_9DBjodF_0Sr23UMAuyh?key=YUpbXc1jJiSm8V2Y8hvaAQ)**