from bs4 import BeautifulSoup  #This requires installation - you won't be able to run this code without installing python and beautiful soup
import requests
import re

# code for iterating over sitemap - incomplete and untested!
# Note that this will take a while to run since it iterates over a LOT of pages
# Also, this is not recursive, so will likely miss some content!

# mainURL = "https://www.genesee.edu/sitemap/"
# sitemap = requests.get(mainURL)

# gcc_sitemap = BeautifulSoup(sitemap.content, 'html.parser')
# sitemap_links = gcc_sitemap.find_all('a')

# for link in sitemap_links:
#     url = link['href']
#     try:
#         if "https" not in url:
#             url = "https://www.genesee.edu" + url
#         if url != "https://www.genesee.edu/sitemap/":
#             html_page = requests.get(url)
#             parser = BeautifulSoup(html_page.content, 'html.parser')
#             references = parser.find_all(string=re.compile(" CIS"))  #added the space before CIS because I was getting orgs that contain CIS in the name!
#             for reference in references:
#                 print("A reference to CIS!")
#                 print(reference)
#                 print("Found here: " + url)
#     except:
#         print("Could not scrape here:" + url)

"""
returns true if the input is not "btn-link"
input: name
output: boolean
"""
def not_buttons(name):
    return name != "btn-link"

"""
gets references to courses from gcc coursefinder
input:
url: string, the url of the coursefinder (needed due to pagination)
course_name: string, the three letters of the course
"""
def get_courses(url, course_name):
    coursefinder = requests.get(url)   # getting the page using GET!
    parser = BeautifulSoup(coursefinder.content, 'html.parser')   # Beautiful Soup parses the HTML for us, allowing us to use nice functions!
    references = parser.find_all("a", class_=not_buttons, string=re.compile(course_name))  # the find_all function finds all references matching the inputs, in this case, links ("a" element), where the class is not btn-link, and the text contains the course name. re is regular expressions, don't worry about it too much, but we need it in the form of a regular expression to function
    for reference in references:  # iterates over all of the found elements
        url = reference["href"]  # gets the contents of the href attribute (the link itself)
        course = reference.contents  # gets the contents of the html element (this returns a string)
        cleaned_course = course[0].strip()  # we only want the first (and only) piece of content anyway. Strip removes whitespace from the beginning and end of a string (cleans up the titles)
        print("Page for " + cleaned_course + " found")
        print("Link: " + url)

coursefinderURL = "https://www.genesee.edu/academics/course-finder/"  # this is the first page of the course finder
get_courses(coursefinderURL, "CIS")

for i in range(2,35):
    coursefinderURL = "https://www.genesee.edu/academics/course-finder/?sf_paged=" + str(i)  # this gets the other pages. I figured this out by looking at the HTML directly!
    get_courses(coursefinderURL, "CIS")

# Beautiful Soup may have some easier ways to do this - but overall this took me about an hour and a half to figure out starting with near zero knowledge of Beautiful Soup
# Keep in mind ethics: I looked at the sitemap page and the coursefinder was listed. robots.txt also had no pages blacklisted. Your bot should either automatically look at these and follow them, or you should make sure the URLs you're collecting follow them.
